
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('input-number', require('./components/InputNumber.vue'));
Vue.component('tabs', require('./components/Tabs.vue'));

Vue.component('tab', require('./components/Tab.vue'));
Vue.component('tab1-content', require('./components/Tab1Content.vue'));
Vue.component('tab2-content', require('./components/Tab2Content.vue'));
Vue.component('tab3-content', require('./components/Tab3Content.vue'));


const app = new Vue({
    el: '#app',

    data: {
    solution: {
        parentData: 0,
        primes: [],
        primesLen: 0,
        allPrimes: [],
        allPrimesLen: 0,
        romRep: ''
    },
    limit:[
        1000,
        900,
        500,
        400,
        100,
        90,
        50,
        40,
        10,
        9,
        5,
        4,
        1
    ],
    glyph: [
        'M',
        'CM',
        'D',
        'CD',
        'C',
        'XC',
        'L',
        'XL',
        'X',
        'IX',
        'V',
        'IV',
        'I'
    ]
},

methods: {
    findAllPrimes(childVal) {
        this.solution.parentData = childVal;
        this.solution.primes = [];
        this.solution.primesLen = 0;
        var candidate = 2;
        var gnumber = this.solution.parentData;
        for (candidate = 2; gnumber > 1; candidate++)
        {
            for (; gnumber % candidate == 0; gnumber /= candidate)
            {
                this.solution.primes.push(candidate);
                this.solution.primesLen++;
            }
        }
        var j = 2;
        this.solution.allPrimes = [];
        this.solution.allPrimesLen = 0;
        var temp = this.solution.parentData;
        for (j=2; j < temp; j++)
        {
            if (this.isPrime(j))
            {
                this.solution.allPrimes.push(j);
                this.solution.allPrimesLen++;
            }
        }
        var temp2 = this.solution.parentData;
        this.solution.romRep = '';
        var i=0;
        for (i=0; i<13; i++)
        {
            while (temp2 >= this.limit[i])
            {
                this.solution.romRep += this.glyph[i];
                temp2 -= this.limit[i];
            }
        }

        return this.solution;
    },

    isPrime: function (number)
    {
        var candidate = 2;
        if (number == 2)
        {
            return true;
        }
        for (candidate = 2; candidate < (number/2)+1; candidate++)
        {
            if (number % candidate == 0)
            {
                return false;
            }
        }
        return true;
    }
}

});
