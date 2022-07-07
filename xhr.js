let result;
function total(liczba) {
    const sendHttpRequest = (method, url, data) => {
        const promise = new Promise((resolve, reject) => {
            const xhr = new XMLHttpRequest();
            xhr.open(method, url);

            xhr.responseType = 'json';

            if (data) {
                xhr.setRequestHeader('Content-Type', 'application/json');

            }

            xhr.onload = () => {
                resolve(xhr.response);
            };

            xhr.send(JSON.stringify(data));
        });
        return promise;
    };

    

    sendHttpRequest('POST', 'api.php', {
        number: liczba,
        total: result
    }).then(responseData => {
        result = responseData.total;
        document.getElementById("date").innerHTML = result;
    })



}

