Fiery Octopus Server
=
Fast Server environment for starting php applications with `PHP8`, `nginx`, `mysql`+`phpmyadmin`

For run use
```
cd docker
docker compose up -d
```

## Containers
1. site: `localhost:8080`
2. mysql: `localhost:3306`
3. phpmyadmin: `localhost:8081`

## PHP working directory
> apps

## Multisite using
> For multisite using you need:
> 1. Add new dir in apps folder 
> 2. Create folder in docker/server/projects with app name
> 3. Copy in folder from 2. files form docker/examples (server.conf.example, Dockerfile.example)
> 4. Rename files from 3. (clear .example from files name)
> 5. Change path on line 6 in server.conf file
> 6. Change path on line 6 and 7 in Dockerfile file with path
> 7. Add container to docker-compose.yml
> >   nginx:    
        container_name: NAME_OF_YOUR_APP  
        image: nginx:stable-alpine  
        #platform: linux/amd64  
        ports:  
            - '8081:80'  
        volumes:  
            - ./../apps/you_folder:/var/www/you_folder  
            - ./../docker/server/projects/you_folder/server.conf:/etc/nginx/conf.d/default.conf  
        networks:  
            - backend  
> 8. Run docker build or build with --no-cache flag if we build early

### Mac M1 notice
>Uncomment 7 and 41 lines in docker-compose.yml (platform: linux/amd64) for fix warning about arm

@copy Fiery 0ctopus Development
