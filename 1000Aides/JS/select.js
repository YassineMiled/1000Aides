

        // Attendre que le document soit prêt
        $(document).ready(function() {
            // Initialise Select2 sur l'élément select avec l'ID "Langues"
            $('#Langues').select2({
                templateResult: formatState
            });

            // Fonction pour formater l'apparence des options avec des images de drapeaux
            function formatState(state) {
                if (!state.id) {
                    return state.text;
                }
                var imageUrl = $(state.element).data('image');
                if (!imageUrl) {
                    return state.text;
                }
                var $state = $('<span><img src="' + imageUrl + '" class="img-flag" /> ' + state.text + '</span>');
                return $state;
            }
        });
   