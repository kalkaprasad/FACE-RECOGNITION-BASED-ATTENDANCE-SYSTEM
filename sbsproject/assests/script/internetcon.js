


if (navigator.onLine) {
    console.log('online');
  } else {
    console.log('ofline');
    $.confirm({
        title: 'Network Error ',
        content: 'Please Connect This device to Internet',
        type: 'red',
        typeAnimated: true,
        buttons: {
            tryAgain: {
                text: 'Try again',
                btnClass: 'btn-red',
                action: function(){
                    
    
                }
            },
            close: function () {
            }
        }
    });
  }
