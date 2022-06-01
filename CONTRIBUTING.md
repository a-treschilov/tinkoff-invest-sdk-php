# How to Contribute

## Pull Requests

1. Fork the Slim Framework repository
2. Create a new branch for each feature or improvement
3. Send a pull request from each feature branch to the `main` branch

## Local development 

### Run application
1. Install Docker
2. Run commands below in terminal
```shell
make start
make composer-install
```
3. Open browser `http://localhost:4092`

### Get Tinkoff Api resources
```
make api-init
```

### Update .protos and generate libraries
```
make api-update VERSION=v1.0.8
```
