# wheeltest
only test

1. Add Controllers to config/routes/annotations.yaml like this:

wheeltest:
     resource: ../../vendor/ikadar/wheeltest/src/Controller/
     type: annotation

2. Register Controllers as service in config/services.yaml like this:

    TestWheelApp\Controller\:
        resource: ../vendor/ikadar/wheeltest/src/Controller/
        tags: ['controller.service_arguments']
