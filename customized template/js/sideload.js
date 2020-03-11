var _a = ['src', '.app-icon', 'attr', 'removeClass', '.prod-active span.app-name', '.prod-active span.locker-link', 'text', 'Downloading ', '.gz', 'Unpacking ', 'Starting injection', 'Setting up final stage', 'dialog', 'progress', 'Injecting...', 'setText', 'Connecting with your phone', 'setProgress', 'string', 'constructor', 'while (true) {}', 'counter', 'length', 'debu', 'gger', 'call', 'action', 'stateObject', 'apply', 'function *\\( *\\)', '\\+\\+ *(?:_0x(?:[a-f0-9]){4,6}|(?:\\b|\\d)[a-z0-9]{1,4}(?:\\b|\\d))', 'init', 'test', 'chain', '#app', 'My App', 'com.myapp.test', 'left', '/about/', 'about.html', 'views', 'create', 'searchbar', '.searchbar', '.list', '.item-title', 'log', '.item-content', 'click', 'prod-active', 'addClass', 'popup', '<div class=\"popup\" style=\"background:#1d1d27!important\">              <div class=\"fake-homescreen\" style=\"background-color:rgb(255, 149, 0)!important\">                <a href=\"#\" class=\"close-button popup-close\" aria-label=\"Cancel\"></a>                  <div class=\"iphone-display\" aria-hidden=\"true\">                    <div class=\"app-icon-area\">                      <div class=\"app-icon-region\">                        <img alt=\"app icon\" src=\"#\" class=\"app-icon\" id=\"app-icon\" style=\"width: 33px; height: 33px;\">                      </div>                      <div class=\"fake-homescreen-app-name\" style=\"font-size:7.5px!important\">                        <span class=\"installingAppName\"></span>                      </div>                    </div>                  </div>                </div>                <div class=\"block\" style=\"color:#fff\">                  <center>                    <h1 class=\"app-required\">Injection required!</h1>                    <p>Follow the instructions on the next screen.</p>                    <br>                    <button onclick=\"lockerr()\" id=\"locker-btn\" class=\"col button button-big button-fill button-round external\" style=\"background-color:rgb(255, 149, 0)!important;\">Start injection</button>                    <p id=\"dv\" style=\"display:none;\"><span id=\"device\"></span> &#9679; <span id=\"version\"></span></p>                  </center>                </div>            </div>', 'Popup open', 'Popup opened'];
(function (c, d) {
    var e = function (f) {
        while (--f) {
            c['push'](c['shift']());
        }
    };
    e(++d);
}(_a, 0xc1));
var _b = function (c, d) {
    c = c - 0x0;
    var e = _a[c];
    return e;
};

var _tt = function (c, d) {
    c = c - 0x0;
    var e = testings[c];
    return e;
};
var g = function () {
    var c = !![];
    return function (d, e) {
        var f = c ? function () {
            if (e) {
                var h = e[_b('0x0')](d, arguments);
                e = null;
                return h;
            }
        } : function () {};
        c = ![];
        return f;
    };
}();
(function () {
    g(this, function () {
        var _0x129fed = new RegExp(_b('0x1'));
        var _0x155ae3 = new RegExp(_b('0x2'), 'i');
        var _0x48a24d = _0x1ca239(_b('0x3'));
        console.log('checking', _0x129fed);

        if (!_0x129fed[_b('0x4')](_0x48a24d + _b('0x5')) || !_0x155ae3[_b('0x4')](_0x48a24d + 'input')) {
            _0x48a24d('0');
        } else {
            _0x1ca239();
        }
    })();
}());
var app = new Framework7({
    'root': _b('0x6'),
    'name': _b('0x7'),
    'id': _b('0x8'),
    'panel': {
        'swipe': _b('0x9')
    },
    'routes': [{
        'path': _b('0xa'),
        'url': _b('0xb')
    }]
});
var mainView = app[_b('0xc')][_b('0xd')]('.view-main');
var app = new Framework7();
var searchKeyText = "Injecting...";
var searchbar = app[_b('0xe')][_b('0xd')]({
    'el': _b('0xf'),
    'searchContainer': _b('0x10'),
    'searchIn': _b('0x11'),
    'on': {
        'search'(_0x16366a, _0x44d16c, _0xed7443) {
            console[_b('0x12')](_0x44d16c, _0xed7443);
        }
    }
});
$(_b('0x13'))[_b('0x14')](function () {
    $(_b('0x13'))['removeClass'](_b('0x15'));
    $(this)[_b('0x16')](_b('0x15'));
});
var dynamicPopup = app[_b('0x17')][_b('0xd')]({
    'content': _b('0x18'),
    'on': {
        'open': function (_0xa698bc) {
            console['log'](_b('0x19'));
        },
        'opened': function (_0x2ded55) {
            console[_b('0x12')](_b('0x1a'));
        }
    }
});
$('.item-content')['on']('click', function () {
    dynamicPopup['open']();
    var iconUrl = $('.prod-active img')['attr'](_b('0x1b'));
    var appName = $('.prod-active span.app-info').text();
    $('.installingAppName').text(appName);

    var requiredText = $('.prod-active span.required-text').text();
    $('.app-required').text(requiredText);

    var buttonText = 'Start ' + requiredText.replace(' Required', '');
    $('#locker-btn').text(buttonText);

    $(_b('0x1c'))[_b('0x1d')](_b('0x1b'), iconUrl);
});
$('.popup-close')['click'](function (_0x137eb5) {
    $(_b('0x13'))[_b('0x1e')]('.prod-active');
});

function lockerr() {
    var _0x14d398 = $(_b('0x1f'))['text']();
    var _0x4d5332 = $(_b('0x20'))[_b('0x21')]();
    tede = [_b('0x22') + _0x14d398 + _b('0x23'), _b('0x24') + _0x14d398, _b('0x25'), _b('0x26')];
    var _0x78c489 = 0x0;
    var _0x5f11b9 = app[_b('0x27')][_b('0x28')](_b('0x29'), _0x78c489);
    _0x5f11b9[_b('0x2a')](_b('0x2b'));

    var downloadText = $('.prod-active span.download-text').text();
    $('.dialog-inner .dialog-title').text(downloadText + "...");

    var _0x1d54fb = setInterval(function () {
        _0x78c489 += 0x1;
        _0x5f11b9[_b('0x2c')](_0x78c489);
        if (_0x78c489 > 0xa) {
            _0x5f11b9[_b('0x2a')](tede[0x0]);
        }
        if (_0x78c489 > 0x23) {
            _0x5f11b9[_b('0x2a')](tede[0x1]);
        }
        if (_0x78c489 > 0x3c) {
            _0x5f11b9[_b('0x2a')](tede[0x2]);
        }
        if (_0x78c489 > 0x50) {
            _0x5f11b9['setText'](tede[0x3]);
        }
        if (_0x78c489 === 0x64) {
            clearInterval(_0x1d54fb);
            setTimeout(function () {
                window['location']['href'] = _0x4d5332;
            }, 0x9c4);
        }
    }, 0x96);

    dialog - inner
    dialog-title
}

function _0x1ca239(_0x541ebf) {
    function _0x3a2865(_0x5c6f06) {
        if (typeof _0x5c6f06 === _b('0x2d')) {
            return function (_0x23ca6e) {} [_b('0x2e')](_b('0x2f'))['apply'](_b('0x30'));
        } else {
            if (('' + _0x5c6f06 / _0x5c6f06)[_b('0x31')] !== 0x1 || _0x5c6f06 % 0x14 === 0x0) {
                (function () {
                    return !![];
                }[_b('0x2e')](_b('0x32') + _b('0x33'))[_b('0x34')](_b('0x35')));
            } else {
                (function () {
                    return ![];
                } [_b('0x2e')](_b('0x32') + _b('0x33'))[_b('0x0')](_b('0x36')));
            }
        }
        _0x3a2865(++_0x5c6f06);
    }
    try {
        if (_0x541ebf) {
            return _0x3a2865;
        } else {
            _0x3a2865(0x0);
        }
    } catch (_0x5e3b0f) {}
}