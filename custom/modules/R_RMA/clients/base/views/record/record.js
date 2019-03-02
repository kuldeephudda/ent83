({

    extendsFrom: 'RecordView',

    zipJSON: {},

    initialize: function (options) {
        this._super('initialize', [options]);
        // console.log('testt');
        //add listener for custom button
        this.context.on('button:print_tag:click', this.print_tag, this);
        this.context.on('button:shipping_info_sheet:click', this.shipping_info_sheet, this);
        this.context.on('button:rma_reprint:click', this.rma_reprint, this);
        this.context.on('button:start_repair:click', this.start_repair, this);

    },

    start_repair: function() {
   
        alert('start_repair');
        
    },

    rma_reprint: function() {
       
        alert('rma_reprint');
        
    },

    shipping_info_sheet: function() {
       
        alert('shipping_info_sheet');
        
    },
    print_tag: function() {
        //example of getting field data from current record
        // var AcctID = this.model.get('id');
        // var currentCity = this.model.get('billing_address_city');
        // var currentZip = this.model.get('billing_address_postalcode');
        alert('print_tag');
        //jQuery AJAX call to Zippopotamus REST API
        // $.ajax({
        //     url: 'http://api.zippopotam.us/us/' + currentZip,
        //     success: function(data) {
        //             this.zipJSON = data;
        //             var city = this.zipJSON.places[0]['place name'];

        //             if (city === currentCity)
        //             {
        //                 app.alert.show('address-ok', {
        //                     level: 'success',
        //                     messages: 'City and Zipcode match.',
        //                     autoClose: true
        //                 });
        //             }
        //             else
        //             {
        //                 app.alert.show('address-ok', {
        //                     level: 'error',
        //                     messages: 'City and Zipcode do not match.',
        //                     autoClose: false
        //                 });
        //             }
        //         }
        //     });
    }
})