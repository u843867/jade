var app = new Vue({
    el: '#shopping_list',

    data:{
        header:'shopping list app',
        
        items:[
            '10 party hats',
            '2 board games',
            '20 cups'
        ],
        text:'Hello Worldy',
        image: './assets/vmSocks-green-onWhite.jpg',
    },

    methods: {
        save_item: function() {
            this.items.push(this.newItem);
            this.newItem = '';
        }
    }

})