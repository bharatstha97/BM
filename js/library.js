class CustomLibrary {

    // Change the class name of any dom elements
    changeClassName = (element, className) => {
        element.className = className;
    }

    // Get datasets from dom elements
    getDatasets = (element) => {
        return element.dataset;
    }

    // Inject new dom element
    injectNewElement = (parent, tag, content) => {
        var newElement = document.createElement(tag);
        newElement.insertAdjacentHTML("beforeend", content);
        parent[0].appendChild(newElement);
        return newElement;

    }
    // Make both ajax and get request
    makeAjaxRequest = (url, method, headers, data, callback) => {
        var xhr = new XMLHttpRequest();
        xhr.open(method, url, true);
        Object.entries(headers).forEach((value) => {
            xhr.setRequestHeader(value[0], value[1]);
        });
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                callback(xhr.responseText);
            }
        };
        xhr.send(JSON.stringify(data));
    }

    makeGetRequest = (url, callback) => {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", url);
        xhr.send();
        xhr.responseType = "json";
        xhr.onload = () => {
            if (xhr.readyState == 4 && xhr.status == 200) {
                callback(xhr.response);
            } else {
                console.log(`Error: ${xhr.status}`);
            }
        };
    }

    // Get values from input box/checkbox/select dropdown
    getFormValue = (element) => {
        if (element.tagName === 'INPUT' || element.tagName === 'SELECT') {
            return element.value;
        } else if (element.tagName === 'CHECKBOX') {
            return element.checked;
        }
    };
    // Set values from input box/checkbox/select dropdown
    setFormValue = (element, value) => {
        if (element.tagName === 'INPUT' || element.tagName === 'SELECT') {
            element.value = value;
        } else if (element.tagName === 'CHECKBOX') {
            element.checked = value;
        }
    }

}