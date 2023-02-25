pipeline {
    agent any

    stages {
        stage('Check User') {
            steps {
                sh 'whoami'
      }
            }

        stage('Checkout') {
            steps {
                checkout([$class: 'GitSCM', branches: [[name: '*/main']], doGenerateSubmoduleConfigurations: false, extensions: [], submoduleCfg: [], userRemoteConfigs: [[credentialsId: '', url: 'https://github.com/fitsaleem/next-js-and-php-ci-cd.git']]])
            }
        }

         stage('clone repo') {
            steps {
                sh 'pwd'
            }
        }

        stage('Install dependencies') {
            steps {
                sh 'cd /var/jenkins_home/workspace/nextJS1-project && composer install'
            }
        }

        stage('Build') {
            steps {
                sh 'cd /var/jenkins_home/workspace/nextJS1-project && npm run build && php artisan optimize'
            }
        }

        stage('Deploy') {
            steps {
                sh 'cd /home/saleem/next-js-and-php-ci-cd'
        }
    }
}
}