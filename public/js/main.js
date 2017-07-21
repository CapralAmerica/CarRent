new Vue({
    el: "#models",
    data: {
        currentView: 'sedans'
    },
    components: {
        sedans: {
            template: '#sedans'
        },
        off_roaders: {
            template: '#off-roaders'
        },
        family_cars: {
            template: '#family-cars'
        }

    },
    methods: {
        switchView: function(view) {
            this.currentView = view
        }
    }
});



new Vue({
    el: "#price_form",
    data: {
        input: '',
        amount: ''
    },

    methods: {
        CalculatePrice: function(){
            this.amount =(this.amount+200)*this.input;
        }
    }

});

