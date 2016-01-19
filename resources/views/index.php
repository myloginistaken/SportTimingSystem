<html>

    <head>
        <title>Angular 2 QuickStart</title>

        <!-- 1. Load libraries -->
        <script src="node_modules/es6-shim/es6-shim.js"></script>
        <script src="node_modules/angular2/bundles/angular2-polyfills.js"></script>
        <script src="node_modules/rxjs/bundles/Rx.umd.js"></script>
        <script src="node_modules/angular2/bundles/angular2-all.umd.js"></script>

        <!-- 2. Load our 'modules' -->
        <script src='js/app.component.js'></script>
        <script src='js/boot.js'></script>
        <script src='js/display.component.js'></script>

    </head>

    <!-- 3. Display the application -->
    <body>
        <my-app>Loading...</my-app>
        <display></display>
    </body>

</html>