
## Laravel Queues Tutorial With Example


This tutorial was inspired by [Laravel Queues Tutorial With Example From Scratch](https://appdividend.com/2017/12/21/laravel-queues-tutorial-example-scratch/);

## Keep Laravel Queue system running with pm2
PM2 is a daemon process manager that will help you manage and keep your application online 24/7 [Check more options and feature of pm2](https://pm2.keymetrics.io/docs/usage/application-declaration/);


- create process-queue.yml file

            apps:
                script    : 'artisan'
                name      : 'artisan-queue-listen'
                cwd       : './'
                args      : 'queue:listen' # or queue:work
                interpreter : 'php'

-  run: 
        pm2 start ./process-queue.yml --name process-queue        