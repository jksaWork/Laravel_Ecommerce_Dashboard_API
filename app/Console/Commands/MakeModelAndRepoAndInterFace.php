<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\File;

// use Facade\FlareClient\Stacktrace\File;


use Illuminate\Auth\Events\Validated;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MakeModelAndRepoAndInterFace extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $modelName = $this->ask('Enter model name');
        $tableName = $this->ask('Enter table name');
        $namespace = ucfirst($this->ask('Enter namespace'));

        // validation

        $validator = Validator::make([
            'model_name' => $modelName,
            'table_name' => $tableName,
        ], [
            'model_name' => ['required'],
            'table_name' => ['required']
        ]);

        // validation falis -------------------------------
        if ($validator->fails()) {
            $this->info('Model are not created.');

            foreach ($validator->errors()->all() as $error) {
                $this->info($error);
            }
            return 1;
        }
        Artisan::command("make:model {$modelName} -mfr");
        // MultiProcess
        // $this->makeModel($modelName, $tableName, $namespace);
        // $this->makeRepo($modelName, $namespace);
        // $this->makeCotro
        // $this->makeModel($modelName, $tableName, $namespace);
        // $this->makeRepo($modelName, $namespace);
    }

    // public function make model ---------------------------

    public function makeModel($modelName, $tableName = null, $namespace = null)
    {
        $model = ucfirst($modelName);
        $mainSpace = $namespace ? "namespace App\Models\\$namespace;" : "namespace App\Models;";
        $tableName = $tableName ? 'protected $table = ' . "'$tableName';" : '';
        $content = "<?php

        $mainSpace

        use Illuminate\Database\Eloquent\Model;

        class {$model} extends Model
        {
            $tableName
        }
        ";
        $folder = "app/Models/$namespace/";

        if (!is_dir($folder)) {
            File::makeDirectory($folder, $mode = 0777, true, true);
        }

        $written = Storage::disk('app')->put('Models/' . $namespace . '/' . $modelName . '.php', $content);

        if ($written) {
            $this->info('Created new model ' . $modelName . '.php in App\Models\\' . $namespace);
        } else {
            $this->info('Something went wrong');
        }
    }

    public function makeRepo($modelName, $namespace)
    {
        $model = ucfirst($modelName);
        $mainSpace = $namespace ? "namespace App\Repositories\\$namespace;" : "namespace App\Repositories;";
        $modelSpace = $namespace ? "use App\Models\\$namespace\\$model;" : "use App\Models\\$model;";
        $content = "<?php

$mainSpace
use App\Repositories\BaseRepo;
$modelSpace

class {$model}Repo extends BaseRepo
{
    public function getModel()
    {
        return $model::class;
    }

}
";
        $folder = "app/Repositories/$namespace/";

        if (!is_dir($folder)) {
            File::makeDirectory($folder, $mode = 0777, true, true);
        }

        $written = Storage::disk('app')->put('Repositories/' . $namespace . '/' . $modelName . 'Repo.php', $content);

        if ($written) {
            $this->info('Created new Repo ' . $modelName . 'Repo.php in App\Repositories\\' . $namespace);
        } else {
            $this->info('Something went wrong');
        }
    }

    public function getViews($modelName)
    {
        $name = ucfirst($modelName);

        $folder = "app/resources/$name/";

        if (!is_dir($folder)) {
            File::makeDirectory($folder, $mode = 0777, true, true);
        }

        $written = Storage::disk('app')->put('Repositories/' . $namespace . '/' . $modelName . 'Repo.php', $content);
    }
}
