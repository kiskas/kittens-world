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
            //window.location.href = 'http://kittens-world.ru/';
        }

        this.ageDeclension = ['аКаОбаАбаИаЙ аГаОаД', 'аКаОбаАббаИб аГаОаДаА', 'аКаОбаАббаИб аЛаЕб'];
        this.monthDeclension = ['аМаЕббб', 'аМаЕбббаА', 'аМаЕбббаЕаВ'];
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

            if (age === 0 && month > 0) {
                bufferAge = this.toYearFromMonth(month * 15);
                month = bufferAge.month;
                age += bufferAge.year;
                result = this.getFullAge(age, month);
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
                resultEl = this.el.find('.age-result .alert'),
                fillerEl = this.el.find('.age-background'),
                height = (255 / 100) * this.fullMonthCount * (100 / (117 * 12));

            if (age === 0) {
                return;
            }
            fillerEl.animate({
                height: height
            }, 1000, function () {
                resultEl.text("ааАбаЕаЙ аКаОбаКаЕ " + age).removeClass('hidden');
            });
        },

        getFullAge: function (year, month) {
            var result;
            if (year === 0) {
                result = this.getDeclension(month, this.monthDeclension);
            } else if (month === 0) {
                result = this.getDeclension(year, this.ageDeclension);
            } else {
                result = this.getDeclension(year, this.ageDeclension) +
                    ' ' +
                    this.getDeclension(month, this.monthDeclension);
            }
            return result;
        },

        toYearFromMonth: function (month) {
            var year = (month / 12) | 0;

            month = month - (year * 12);
            return { year : year, month: month };
        },

        /**
         * Create phrase with some number, where you use declension
         * @param number Some number for declension
         * @param declension Array of declension
         * @returns {string} Return phrase, with declension
         */
        getDeclension:  function (number, declension) {
            var currentDeclension,
                degree = number.toString().length - 1 || 1,
                lastGrade = (number % Math.pow(10, degree));
            if (lastGrade === 1) {
                currentDeclension = declension[0];
            } else if (lastGrade > 1 && lastGrade < 5) {
                currentDeclension = declension[1];
            } else {
                currentDeclension = declension[2];
            }
            return number + ' ' + currentDeclension;
        }
    };

    window.CatsTool = catCalculator;
}(jQuery, window));