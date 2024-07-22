pipeline {
	agent any
	stages {
    	stage('Checkout SCM') {
        	steps {
            	git 'https://github.com/tonglenovo/SSD_Web_Test.git' 
        	}
    	}

    	stage('OWASP Dependency-Check Vulnerabilities') {
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
                    sh "/var/jenkins_home/tools/hudson.plugins.sonar.SonarRunnerInstallation/SonarQube/bin/sonar-scanner -Dsonar.projectKey=OWASP -Dsonar.sources=. -Dsonar.host.url=http://172.30.138.84:9000 -Dsonar.token=sqp_ae4836e232c88fe317c825b30d0afff34a75ca10"
                    }
                }
            }
        }
  }
	post {
        always {
            recordIssues enabledForFailure: true, tool: sonarQube()
        }
    }
}
