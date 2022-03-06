set -e

echo "Deploying application ..."

set -e

echo "Deploying application ..."

# Enter maintenance mode
(php artisan down) || true
    # Update codebase
    git pull origin main
# Exit maintenance mode
php artisan up

echo "Application deployed!"
