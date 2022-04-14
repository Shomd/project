/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/calendar.js":
/*!**********************************!*\
  !*** ./resources/js/calendar.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var week = ["日", "月", "火", "水", "木", "金", "土"];
var date = new Date();
var year = date.getFullYear();
var month = date.getMonth() + 1;

function showCalendar(year, month) {
  for (i = 0; i < 1; i++) {
    var calendarHtml = createCalendar(year, month);
    var sec = document.createElement('section');
    sec.innerHTML = calendarHtml;
    document.querySelector('#calendar').appendChild(sec);
    month++;

    if (month > 12) {
      year++;
      month = 1;
    }
  }
}

function createCalendar(year, month) {
  // 月の初日を取得
  var start = new Date(year, month - 1, 1); // 月の最後の日を取得

  var end = new Date(year, month, 0); // 月の末日

  var endDay = end.getDate(); // 先月の最後の日

  var lastMonth = new Date(year, month - 1, 0); // 先月の末日

  var lastMonthEnd = lastMonth.getDate(); // 月初めの曜日を取得

  var startDay = start.getDay(); // 

  var count = 1;
  var calendar = '';
  document.querySelector('#header').innerHTML = year + "年 " + month + "月";
  calendar += '<table class="table table-bordered">';

  for (var d = 0; d < week.length; d++) {
    calendar += "<td>" + week[d] + "</td>";
  }

  for (var _i = 0; _i < 5; _i++) {
    calendar += "<tr>";

    for (var w = 0; w < 7; w++) {
      if (_i == 0 && w < startDay) {
        var num = lastMonthEnd - startDay + w + 1;
        calendar += '<td class="disabled">' + num + '</td>';
      } else if (count > endDay) {
        var _num = count - endDay;

        calendar += '<td class="disabled">' + _num + '</td>';
        count++;
      } else {
        // calendar += '<td>' + count + '<br>' + '<button>出勤' +'</botton>' + '<br>' +  '<button>公休' +'</botton>' + '</td>' ;
        calendar += '<td>' + count + '<br>' + '<button>申請する' + '</botton>' + '</td>';
        count++;
      }
    }

    calendar += '</tr>';
  }

  calendar += '</table>';
  return calendar;
}

function moveCalendar(e) {
  document.querySelector('#calendar').innerHTML = '';

  if (e.target.id === 'prev') {
    month--;

    if (month < 1) {
      year--;
      month = 12;
    }
  }

  if (e.target.id === 'next') {
    month++;

    if (month > 12) {
      year++;
      month = 1;
    }
  }

  showCalendar(year, month);
}

document.querySelector('#prev').addEventListener('click', moveCalendar);
document.querySelector('#next').addEventListener('click', moveCalendar);
showCalendar(year, month);

/***/ }),

/***/ 1:
/*!****************************************!*\
  !*** multi ./resources/js/calendar.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\data\project\seikabutu\laravel-project\resources\js\calendar.js */"./resources/js/calendar.js");


/***/ })

/******/ });