pipeline {
  agent {
    node {
      label 'win-agent'
    }

  }
  stages {
    stage('clean') {
      steps {
        bat 'mvn -DskipTests clean'
      }
    }

    stage('compile') {
      steps {
        bat 'mvn -DskipTests compile'
      }
    }

  }
}