set -e

echo "Deploying Application ..."

set -e

echo "Deploying Application ..."

# Enter maintenance mode
(php artisan down) || true
    # Update codebase
    git pull origin main
# Exit maintenance mode
php artisan up

echo "Application deployed!"
