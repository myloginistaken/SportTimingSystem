function Service() {};

Service.prototype.greeting = function() {
    return 'hello';
};

var Cmp = ng.core.
Component({
    selector: 'cmp',
    viewInjector: [Service]
}).
View({
    template: '{{greeting}} world!'
}).
Class({
    constructor: [Service, function Cmp(service) {
        this.greeting = service.greeting();
    }]
});

document.addEventListener('DOMContentLoaded', function() {
    ng.platform.browser.bootstrap(Cmp);
});