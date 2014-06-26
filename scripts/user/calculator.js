/**
 *
 * @author p0lax
 * @date: 26.06.2014
 */
(function ($, window) {
    var catCalculator;
    catCalculator = function (options) {
        if (!options || this.el) {
            return {};
        }
        
        var location = window.location.host;
        if (location.indexOf('kittens-world.ru') === -1) {
            window.location.href = 'http://kittens-world.ru/';
        }

        this.ageDeclension = ['год', 'года', 'лет'];
        this.el = options.el;

        this.el.find('.calc-age').on('click', $.proxy(this.drawCatAge, this));
    };

    catCalculator.prototype = {

        getAge: function () {
            return this.el.find('#cat-age').val() | 0;
        },

        getMonth: function () {
            return this.el.find('#cat-month').val() | 0;
        },

        calculate: function () {
            var age = this.getAge(),
                month = this.getMonth(),
                bufferAge,
                result;

            if ((!age && !month) || age < 0 || month < 0 || age > 24 || month > 12) {
                return 0;
            }

            if (age < 0 && month > 0) {
                result = this.getFullAge(0, month * 15);
            } else if (age === 1) {
                bufferAge = this.toYearFromMonth(month * 10);
                month = bufferAge.month;
                age *= 15;
                age += bufferAge.year;
                result = this.getFullAge(age, month);
            } else if (age > 1) {
                bufferAge = this.toYearFromMonth(month * 4);
                month = bufferAge.month;
                age = 15 + 10 + (age - 2) * 4;
                age += bufferAge.year;
                result = this.getFullAge(age, month);
            }
            this.fullMonthCount = age * 12 + month;
            return result;
        },

        drawCatAge: function () {
            var age = this.calculate(),
                resultEl = this.el.find('.age-result'),
                fillerEl = this.el.find('.age-background'),
                height = (255 / 100) * this.fullMonthCount * (100 / (117 * 12));

            if (age === 0) {
                return;
            }
            fillerEl.animate({
                height: height
            }, 1000, function () {
                resultEl.text("Вашей кошке " + age).removeClass('hidden');
            });
        },

        getFullAge: function (year, month) {
            var result;
            if (year === 0) {
                result = month + ' мес.';
            } else if (month === 0) {
                result = this.ageDeclensions(year);
            } else {
                result = this.ageDeclensions(year) + ' ' + month + ' мес.';
            }
            return result;
        },

        toYearFromMonth: function (month) {
            var year = (month / 12) | 0;

            month = month - (year * 12);
            return { year : year, month: month };
        },

        ageDeclensions:  function (age) {
            var desclension = '',
                lastGrade = (age % 10);
            if (lastGrade === 1) {
                desclension = this.ageDeclension[0];
            } else if (lastGrade > 1 && lastGrade <= 3) {
                desclension = this.ageDeclension[1];
            } else {
                desclension = this.ageDeclension[2];
            }
            return age + ' ' + desclension;
        }
    };

    window.CatsTool = catCalculator;
}(jQuery, window));