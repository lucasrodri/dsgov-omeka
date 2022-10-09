function myFunctionEntrar() {
    //window.location.href = "https://acesso.gov.br/";
    window.open('https://acesso.gov.br/', '_blank');
}

function myFunctionBusca() {
    var termo = document.getElementById("searchbox").value;
    console.log(termo)
    //post('/search', params, 'get');
    window.location.href = "/search?query=" + termo + "&query_type=exact_match&record_types[]=Item&record_types[]=File&record_types[]=Collection&record_types[]=Exhibit&record_types[]=ExhibitPage&record_types[]=SimplePagesPage&submit_search=Pesquisar";
}

jQuery(document).ready(function ($) {
    (function () {
        var Contrast = {
            storage: 'contrastState',
            cssClass: 'contrast',
            currentState: null,
            contador: 0,
            check: checkContrast,
            getState: getContrastState,
            setState: setContrastState,
            toogle: toogleContrast,
            updateView: updateViewContrast
        };

        window.toggleContrast = function () { Contrast.toogle(); };

        Contrast.check();

        function checkContrast() {
            this.updateView();
        }

        function getContrastState() {
            return localStorage.getItem(this.storage) === 'true';
        }

        function setContrastState(state) {
            localStorage.setItem(this.storage, '' + state);
            this.currentState = state;
            this.contador += 1;
            this.updateView();
        }

        function updateViewContrast() {
            var body = document.body;
            if (this.currentState === null) {
                this.currentState = this.getState();
                //body.classList.add(this.cssClass);
            }
            if (this.currentState || this.contador == 1) {
                body.classList.add(this.cssClass);
            } else if (this.currentState != null && this.contador > 0) {
                body.classList.remove(this.cssClass);
            }
        }

        function toogleContrast() {
            this.setState(!this.currentState);
        }
    })();
});

/**
 * sends a request to the specified url from a form. this will change the window location.
 * @param {string} path the path to send the post request to
 * @param {object} params the parameters to add to the url
 * @param {string} [method=post] the method to use on the form
 * https://stackoverflow.com/questions/133925/javascript-post-request-like-a-form-submit
 */
function post(path, params, method = 'post') {

    // The rest of this code assumes you are not using a library.
    // It can be made less verbose if you use one.
    const form = document.createElement('form');
    form.method = method;
    form.action = path;

    for (const key in params) {
        if (params.hasOwnProperty(key)) {
            const hiddenField = document.createElement('input');
            hiddenField.type = 'hidden';
            hiddenField.name = key;
            hiddenField.value = params[key];

            form.appendChild(hiddenField);
        }
    }

    document.body.appendChild(form);
    form.submit();
}