pipeline {
	agent any
	stages {
    	stage('Checkout SCM') {
        	steps {
            	git 'https://github.com/tonglenovo/SSD_Web_Test.git' 
        	}
    	}

    	stage('OWASP Dependency-Check Vulnerabilities') {
<<<<<<< HEAD
  			steps {
    			dependencyCheck additionalArguments: '''
                	-o './'
                	-s './'
                	-f 'ALL'
                	--prettyPrint''', odcInstallation: 'OWASP Dependency-Check Vulnerabilities'
				dependencyCheckPublisher pattern: 'dependency-check-report.xml'
  			}
		}

		stage('Test') {
			steps {
                // Install dependencies
        		sh 'composer install'
        
				// Run PHPUnit tests
				sh './vendor/bin/phpunit tests'
            }
		}

		stage('Code Quality Check via SonarQube') {
            steps {
                script {
                def scannerHome = tool 'SonarQube';
                    withSonarQubeEnv('SonarQube') {
                    sh "/var/jenkins_home/tools/hudson.plugins.sonar.SonarRunnerInstallation/SonarQube/bin/sonar-scanner -Dsonar.projectKey=OWASP -Dsonar.sources=. -Dsonar.host.url=http://192.168.1.209:9000 -Dsonar.token=sqp_030af541903a865d092c4d458ef9eacf97ba2de9"
                    }
                }
            }
        }
	}
=======
	  	steps {
	    	dependencyCheck additionalArguments: '''
	                	-o './'
	                	-s './'
	                	-f 'ALL'
	                	--prettyPrint''', odcInstallation: 'OWASP Dependency-Check Vulnerabilities'
	   	 
	    	dependencyCheckPublisher pattern: 'dependency-check-report.xml'
	  	}
	}

	stage('Code Quality Check via SonarQube') {
            steps {
                script {
                def scannerHome = tool 'SonarQube';
                    withSonarQubeEnv('SonarQube') {
                    sh "/var/jenkins_home/tools/hudson.plugins.sonar.SonarRunnerInstallation/SonarQube/bin/sonar-scanner -Dsonar.projectKey=OWASP -Dsonar.sources=. -Dsonar.host.url=http://192.168.1.209:9000 -Dsonar.token=sqp_030af541903a865d092c4d458ef9eacf97ba2de9"
                    }
                }
            }
        }
  }
>>>>>>> 2da343bcf32303e7572efc824098d5407010c5e6
	post {
        always {
            recordIssues enabledForFailure: true, tool: sonarQube()
        }
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 2da343bcf32303e7572efc824098d5407010c5e6
