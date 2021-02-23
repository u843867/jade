function displayComponents() {
    return {
        searchResults:'hey!!!',
        pax:null,
        customize:null,
        scrollTop() { 
            // alert('I got fired');
            // window.scrollTo(0, 500);
            // alert('I got hired');
            // alert('I got fired again!');
            var myDiv = document.getElementById('searchResultsDiv');
                myDiv.scrollTop = 0;
                // alert(myDiv.scrollHeight);
                // myDiv.innerHTML = variableLongText;
                

        },
    }
}



function dropdown() {
    return {

        data: {
            // Component init values
            showTripTypeModal: true,
            
            // itinerary values
            tripType: 'Roundtrip',
            numPax: '1', 
            cabin: 'Economy',
            closeModal: '{ open: false }'
        },

        toggle() { 
            
            if (this.showTripTypeModal) {
               
                this.showTripTypeModal = false;

            }
            else {
                this.showTripTypeModal = true;
                
            }
        },


        close() { this.show = false },
        isOpen() { return {open: true} },
        isClosed() { return { open: false } },
    }
}

function slideout() {
	return {
		open: false,
		usedKeyboard: false,
		init() {
			this.$watch('open', value => {
				value && this.$refs.closeButton.focus()
				this.toggleOverlay()
			})
			this.toggleOverlay()
		},
		toggleOverlay() {
			document.body.classList[this.open ? 'add' : 'remove']('h-screen', 'overflow-hidden')
		}
	}
}