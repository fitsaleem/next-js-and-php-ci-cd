pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout([$class: 'GitSCM', branches: [[name: '*/main']], doGenerateSubmoduleConfigurations: false, extensions: [], submoduleCfg: [], userRemoteConfigs: [[credentialsId: '', url: 'https://github.com/coding-ustad/demo-repo.git']]])
            }
        }

        stage('Install dependencies') {
            steps {
                sh 'cd /home/saleem/Desktop/coding-ustad && npm install && composer install'
            }
        }

        stage('Build') {
            steps {
                sh 'cd /home/saleem/Desktop/coding-ustad && npm run build && php artisan optimize'
            }
        }

        stage('Deploy') {
            steps {
                sh 'cd /home/saleem/Desktop/coding-ustad && pm2 restart all'
            }
        }
    }
}
