/* 	фиксация меню при скроллинге, отключено.
 *	Нужно разобраться с отображением переключения в мобильной версии 
 * 	и конфликтом с десктопной.
*/
var scrollFloat = function() {
    'use strict';

    var app = {};

    app.init = function init(node) {
        if (!node || node.nodeType !== 1) {
            throw new Error(node + ' is not DOM element');
        }
        handleWindowScroll(node);
    };

    function handleWindowScroll(floatElement) {
        window.onscroll = function() {
            if (window.scrollY > floatElement.offsetTop) {
                if (floatElement.style.position !== 'fixed') {
                    floatElement.style.position = 'fixed';
                    floatElement.style.top = '0';
					floatElement.style.opacity = 0.4;
					//document.getElementById('menu').style.cssText = "display:block; position: fixed; top: 5px; left: 30px;";

					document.getElementById('menu').className = 'fixedPhoneMenu';
                }
            } else {
                if (floatElement.style.position === 'fixed') {
                    floatElement.style.position = '';
                    floatElement.style.top = '';
					floatElement.style.opacity = 1;
					document.getElementById('menu').className = 'menu';
                }
            }
        };
    }

    return app;
}();