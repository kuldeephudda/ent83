({

    extendsFrom: 'RecordView',

    zipJSON: {},

    initialize: function (options) {
        this._super('initialize', [options]);
        // console.log('testt');
        //add listener for custom button
        this.context.on('button:status_open:click', this.status_open, this);
        this.context.on('button:status_working:click', this.status_working, this);
        this.context.on('button:status_close:click', this.status_close, this);
      

    },

    status_open: function() {
        alert(this.model.get('id'));
        alert('status_open');
        
    },

    status_working: function() {
       
        alert('status_working');
        
    },

    status_close: function() {
       
        alert('status_close');
        
    }
})