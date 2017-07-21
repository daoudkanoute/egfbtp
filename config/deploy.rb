# config valid only for current version of Capistrano
lock '3.4.0'

set :application, 'root'
set :repo_url, 'git@gitlab.com:chakroun.yesser/EGF-BTP.git'

server '37.59.49.20', user: 'root', roles: %w{app db web}, port: 22

set :symfony_console_path, "bin/console"

set :permission_method, :acl
set :file_permissions_users, ["root","www-data"]
set :file_permissions_paths, ["var", "web/images","web/sounds","web/attestations", "vendor"]
set :writable_dirs, ["var/cache", "var/logs"]
set :use_sudo, false

# Share files/directories between releases
set :linked_files, %w(app/config/parameters.yml)
set :linked_dirs, %w(var/logs var/sessions web/uploads web/img vendor web/images web/sounds web/attestations)


# Default value for keep_releases is 5
set :keep_releases, 3

after 'deploy:updated', 'composer:install'
after 'deploy:updated', 'symfony:assets:install'
after 'deploy:updated', 'symfony:assetic:dump'
after 'deploy:updated', 'symfony:cache:clear'
after "deploy:updated", "deploy:set_permissions:acl"