pipeline {
    agent { label 'swarna-master-node' }
    stages
    {
        stage('Composing'){
            steps {
                checkout scm
                sh 'docker version'
                sh 'docker-compose up --build -d'
            }
        }
    }
}