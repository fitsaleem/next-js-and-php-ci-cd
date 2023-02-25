pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout([$class: 'GitSCM', branches: [[name: '*/main']], doGenerateSubmoduleConfigurations: false, extensions: [], submoduleCfg: [], userRemoteConfigs: [[credentialsId: '', url: 'https://github.com/fitsaleem/next-js-and-php-ci-cd.git']]])
            }
        }

        stage('Install dependencies') {
            steps {
                sh 'npm install && composer install'
            }
        }

        stage('Build') {
            steps {
                sh 'npm run build && php artisan optimize'
            }
        }

        stage('Deploy') {
            steps {
                sh ''
        }
    }
}
}