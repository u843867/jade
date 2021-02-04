Vue.component('flight_card', {
   
    template:
        `<div class='card'>
            <div class="card-content">
                <p>{{ flight_card_info.id }}</p>
                <p>{{ flight_card_info.departure_date }}</p>
                <p>{{ flight_card_info.departure_time }}</p>
                <p>{{ flight_card_info.arrival_time }}</p>
                <p>{{ flight_card_info.departure_city }}</p>
                <p>{{ flight_card_info.arrival_city }}</p>
                <p>{{ flight_card_info.duration }}</p>
                <p>{{ flight_card_info.stops }}</p>
                <p>{{ flight_card_info.price }}</p>
            </div>   
        </div>`,   
    
        props: ['flight_card_info'],
    
     
}),   

Vue.component('flight_card2', {
   
    template:
        `<div class='card'>
            <div class="card-content">
                <p>{{ id }}</p>
                <p>{{ departure_date }}</p>
            </div>   
        </div>`,   
    
        props: ['id','departure_date']

})              
                


var app = new Vue({
    el: '#app',

    data() {
        return {
            text:'Hello World',
            image: './assets/vmSocks-green-onWhite.jpg',
            name: 'John',
            teams: ['Liverpool', 'Man United', 'Barcelona', 'Juventus', 'Fiorentina', 'AC Milan'],
            age:0,
            fontSize:30,
            text_1: {
                color: 'red',
                fontSize: 40,
                fontWeight:'800',
                fontFamily: 'Raleway'
            },
            Active: true,
            firstName: 'Justin',
            lastName: 'Bones',  
            
            flight_card_infos: [
                {
                    id: 1,
                    departure_date: '12 Dec',
                    departure_time: '12:45pm',
                    arrival_time: '14:30pm',
                    departure_city: 'London, LHR',
                    arrival_city: 'Madrid, MAD',
                    duration: '2hrs 55m',
                    stops: 'non stop',
                    price: '£150'
                },
                {
                    id: 2,
                    departure_date: '12 Dec',
                    departure_time: '13:45pm',
                    arrival_time: '15:30pm',
                    departure_city: 'London, LHR',
                    arrival_city: 'Madrid, MAD',
                    duration: '2hrs 55m',
                    stops: 'non stop',
                    price: '£175'
                },
                {
                    id: 3,
                    departure_date: '12 Dec',
                    departure_time: '14:45pm',
                    arrival_time: '16:30pm',
                    departure_city: 'London, LHR',
                    arrival_city: 'Madrid, MAD',
                    duration: '2hrs 55m',
                    stops: '2',
                    price: '£180'
                },
                {
                    id: 4,
                    departure_date: '12 Dec',
                    departure_time: '15:45pm',
                    arrival_time: '17:30pm',
                    departure_city: 'London, LHR',
                    arrival_city: 'Madrid, MAD',
                    duration: '2hrs 55m',
                    stops: '1',
                    price: '£190'
                }
          ]
        }
      },
    
    methods:{
        addToCart: function () {
            this.age += 1
        }
    },

    computed:{
        fullName() {
            return this.firstName + ' ' + this.lastName
        }
    }

})


