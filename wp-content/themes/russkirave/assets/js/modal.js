(function () {
    if (typeof window.CustomEvent === "function") return false;
    function CustomEvent(event, params) {
        params = params || { bubbles: false, cancelable: false, detail: null };
        var evt = document.createEvent("CustomEvent");
        evt.initCustomEvent(
            event,
            params.bubbles,
            params.cancelable,
            params.detail
        );
        return evt;
    }
    window.CustomEvent = CustomEvent;
})();

$modal = function (options) {
    var _elemModal,
        _eventShowModal,
        _eventHideModal,
        _hiding = false,
        _destroyed = false,
        _animationSpeed = 200;

    function _createModal(options) {
        var elemModal = document.createElement("div"),
            modalTemplate =
                '<div class="modal__backdrop" data-dismiss="modal"><div class="modal__content"><div class="modal__header"><div class="modal__title" data-modal="title">{{title}}</div><span class="modal__btn-close" data-dismiss="modal" title="Закрыть">×</span></div><div class="modal__body" data-modal="content">{{content}}</div>{{footer}}</div></div>',
            modalFooterTemplate =
                '<div class="modal__footer">{{buttons}}</div>',
            modalButtonTemplate =
                '<button type="button" class="{{button_class}}" data-handler={{button_handler}}>{{button_text}}</button>',
            modalHTML,
            modalFooterHTML = "";

        elemModal.classList.add("modal");
        modalHTML = modalTemplate.replace(
            "{{title}}",
            options.title || "Новое окно"
        );
        modalHTML = modalHTML.replace("{{content}}", options.content || "");
        if (options.footerButtons) {
            for (
                var i = 0, length = options.footerButtons.length;
                i < length;
                i++
            ) {
                var modalFooterButton = modalButtonTemplate.replace(
                    "{{button_class}}",
                    options.footerButtons[i].class
                );
                modalFooterButton = modalFooterButton.replace(
                    "{{button_handler}}",
                    options.footerButtons[i].handler
                );
                modalFooterButton = modalFooterButton.replace(
                    "{{button_text}}",
                    options.footerButtons[i].text
                );
                modalFooterHTML += modalFooterButton;
            }
            modalFooterHTML = modalFooterTemplate.replace(
                "{{buttons}}",
                modalFooterHTML
            );
        }
        modalHTML = modalHTML.replace("{{footer}}", modalFooterHTML);
        elemModal.innerHTML = modalHTML;
        document.body.appendChild(elemModal);
        return elemModal;
    }

    function _showModal() {
        if (!_destroyed && !_hiding) {
            _elemModal.classList.add("modal__show");
            document.dispatchEvent(_eventShowModal);
        }
    }

    function _hideModal() {
        _hiding = true;
        _elemModal.classList.remove("modal__show");
        _elemModal.classList.add("modal__hiding");
        setTimeout(function () {
            _elemModal.classList.remove("modal__hiding");
            _hiding = false;
        }, _animationSpeed);
        document.dispatchEvent(_eventHideModal);
    }

    function _handlerCloseModal(e) {
        if (e.target.dataset.dismiss === "modal") {
            _hideModal();
        }
    }

    _elemModal = _createModal(options || {});

    _elemModal.addEventListener("click", _handlerCloseModal);
    _eventShowModal = new CustomEvent("show.modal", { detail: _elemModal });
    _eventHideModal = new CustomEvent("hide.modal", { detail: _elemModal });

    return {
        show: _showModal,
        hide: _hideModal,
        destroy: function () {
            _elemModal.parentElement.removeChild(_elemModal),
                _elemModal.removeEventListener("click", _handlerCloseModal),
                (_destroyed = true);
        },
        setContent: function (html) {
            _elemModal.querySelector('[data-modal="content"]').innerHTML = html;
        },
        setTitle: function (text) {
            _elemModal.querySelector('[data-modal="title"]').innerHTML = text;
        },
    };
};

// dev code

(function () {
    // при клике по кнопке #show-modal
    document.querySelectorAll("#show-modal").forEach((post) => {
        post.addEventListener("click", (e) => {
            var modal = $modal({
                footerButtons: [
                    {
                        class: "btn btn__buy",
                        text: `Buy for 💎 ${e.currentTarget.getAttribute(
                            "data-price"
                        )} TON`,
                        handler: "modalHandlerBuy",
                    },
                    {
                        class: "btn btn__cancel",
                        text: "Закрыть",
                        handler: "modalHandlerCancel",
                    },
                ],
            });

            document
                .querySelector(".modal__backdrop")
                .addEventListener("click", (e) => {
                    if (e.target.getAttribute("data-dismiss")) {
                        modal.destroy();
                        document.body.classList.remove("modal-opened");
                        document.body.style.overflow = "auto";
                    }
                });
            document
                .querySelector(".modal__btn-close")
                .addEventListener("click", () => {
                    modal.destroy();
                    document.body.classList.remove("modal-opened");
                    document.body.style.overflow = "auto";
                });

            document.addEventListener("click", function (e) {
                if (
                    e.target.getAttribute("data-handler") ===
                    "modalHandlerCancel"
                ) {
                    modal.destroy();
                    document.body.classList.remove("modal-opened");
                    document.body.style.overflow = "auto";
                }
                if (
                    e.target.getAttribute("data-handler") === "modalHandlerBuy"
                ) {
                    document.location.href = `${post.getAttribute(
                        "data-buy-src"
                    )}`;
                }
            });

            modal.setTitle(
                "NFT - " + e.currentTarget.getAttribute("data-title")
            );
            modal.setContent(
                '<div style="margin-bottom: 15px;flex: 1 0 60%;box-shadow: 4px 4px 8px 0px rgba(34, 60, 80, 0.2);"><img src="' +
                    e.currentTarget.getAttribute("data-src") +
                    '" alt="' +
                    e.currentTarget.getAttribute("data-alt") +
                    '" style="display: block; height: auto; max-width: 100%; margin: 0 auto;"></div><div style="flex: 1 0 40%;"><div style="display:flex;justify-content:space-between;font-size: 18px; font-weight:bold;">' +
                    "<div>" +
                    e.currentTarget.getAttribute("data-title") +
                    "</div>" +
                    "<div style='text-transform:uppercase;' class=dashboard__subtitle--" +
                    e.currentTarget.getAttribute("data-color") +
                    ">" +
                    e.currentTarget.getAttribute("data-color") +
                    "</div>" +
                    "</div>" +
                    e.currentTarget.getAttribute("data-descr") +
                    "</b></div>"
            );
            document.querySelector(".modal__content").classList.add(`modal__content--${e.currentTarget.getAttribute("data-color")}`);
            modal.show();
            document.body.classList.add("modal-opened");
            document.body.style.overflow = "hidden";
        });
    });
})();
