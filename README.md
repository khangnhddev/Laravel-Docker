## Build and Run Your Docker Containers
From the root of your Laravel project, run:
```bash
docker-compose up -d --build
```
This command builds the images for your application and starts the containers in detached mode.

## Access Your Laravel Application
Your Laravel application should now be accessible at http://localhost:8000.

## Interacting with Your Containers
To interact with your application container, use:
```bash
docker-compose exec app bash
```
This will open a bash shell inside the app container, where you can run Laravel artisan commands or interact with Composer.
