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
                	--prettyPrint --noupdate''', odcInstallation: 'OWASP Dependency-Check Vulnerabilities'
   	 
    	dependencyCheckPublisher pattern: 'dependency-check-report.xml'
  	}
	}
  }
}