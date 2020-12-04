class InfoInput {
    constructor(wrapperID) {
        this.wrapper = document.getElementById(wrapperID);
        this.textSpan = this.wrapper.getElementsByTagName("span")[0];
        this.textInput = this.wrapper.getElementsByTagName("input")[0];
        this.initEvent();
    }
    wrapperOnfocus(func) {
        var eleObj = this;
        return function (e) {
            eleObj.wrapper.style.lineHeight = "20px";
            eleObj.wrapper.style.borderColor = "#f96302";
            eleObj.wrapper.classList.remove("h-inputwrapper-error");
            eleObj.textSpan.classList.add("small");
            eleObj.textSpan.style.color = "#f96302";
            setTimeout(function () {
                eleObj.textInput.style.display = "block";
                eleObj.textInput.focus();
            }, 400);
        }
    };
    initEvent() {
        var clickFunc = this.wrapperOnfocus();
        this.wrapper.addEventListener("click", clickFunc);

        this.textInput.addEventListener("blur", (e) => {
            if (this.textInput.value == "") {
                this.textSpan.classList.remove("small");
                this.wrapper.style.lineHeight = "40px";
            }
            this.textSpan.style.color = "black";
            this.wrapper.style.borderColor = "black";
        })

    };
    check = function () {
        if (this.textInput.value == "") {
            this.wrapper.classList.add("h-inputwrapper-error");
            return false
        }
        return true;
    }
};

var token = "";
var dataCallBack = function (data) {
    document.getElementById("recaptchaMessage").style.display = "none";
    token = data;
}
var firstName = new InfoInput("firstNameWrp");
var lastName = new InfoInput("lastNameWrp");
var email = new InfoInput("emailWrp");
var phone = new InfoInput("phoneWrp");

document.getElementById("formSubmitBtn").addEventListener("click", function () {
    var doSubmit = false;
    doSubmit = firstName.check();
    doSubmit = lastName.check() && doSubmit;
    doSubmit = email.check() && doSubmit;
    doSubmit = phone.check() && doSubmit;
    doSubmit = token != "" && doSubmit;
    if (token == "") {
        document.getElementById("recaptchaMessage").style.display = "block";
    }
    if (doSubmit) {
        document.getElementById("clientInfo").submit();
    }
});

if (document.getElementById("isshowthanks").value == "1") {
    showthanksDiv = document.getElementById("showthanksDiv");
    showthanksDiv.style.display = "block";
}