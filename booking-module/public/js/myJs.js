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