/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }
function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }
function _iterableToArrayLimit(arr, i) { var _i = null == arr ? null : "undefined" != typeof Symbol && arr[Symbol.iterator] || arr["@@iterator"]; if (null != _i) { var _s, _e, _x, _r, _arr = [], _n = !0, _d = !1; try { if (_x = (_i = _i.call(arr)).next, 0 === i) { if (Object(_i) !== _i) return; _n = !1; } else for (; !(_n = (_s = _x.call(_i)).done) && (_arr.push(_s.value), _arr.length !== i); _n = !0) { ; } } catch (err) { _d = !0, _e = err; } finally { try { if (!_n && null != _i.return && (_r = _i.return(), Object(_r) !== _r)) return; } finally { if (_d) throw _e; } } return _arr; } }
function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }
(function ($, Drupal, debounce) {
  Drupal.behaviors.tableFilterByText = {
    attach: function attach(context, settings) {
      var _once = once('table-filter-text', 'input.table-filter-text'),
        _once2 = _slicedToArray(_once, 1),
        input = _once2[0];
      if (!input) {
        return;
      }
      var $table = $(input.getAttribute('data-table'));
      var $rowsAndDetails;
      var $rows;
      var $details;
      var searching = false;
      function hidePackageDetails(index, element) {
        var $packDetails = $(element);
        var $visibleRows = $packDetails.find('tbody tr:visible');
        $packDetails.toggle($visibleRows.length > 0);
      }
      function filterModuleList(e) {
        var query = e.target.value;
        var re = new RegExp("\\b".concat(query), 'i');
        function showModuleRow(index, row) {
          var sources = row.querySelectorAll('.table-filter-text-source, .module-name, .module-description');
          var sourcesConcat = '';
          sources.forEach(function (item) {
            sourcesConcat += item.textContent;
          });
          var textMatch = sourcesConcat.search(re) !== -1;
          $(row).closest('tr').toggle(textMatch);
        }
        $rowsAndDetails.show();
        if (query.length >= 2) {
          searching = true;
          $rows.each(showModuleRow);
          $details.not('[open]').attr('data-drupal-system-state', 'forced-open');
          $details.attr('open', true).each(hidePackageDetails);
          Drupal.announce(Drupal.t('!modules modules are available in the modified list.', {
            '!modules': $rowsAndDetails.find('tbody tr:visible').length
          }));
        } else if (searching) {
          searching = false;
          $rowsAndDetails.show();
          $details.filter('[data-drupal-system-state="forced-open"]').removeAttr('data-drupal-system-state').attr('open', false);
        }
      }
      function preventEnterKey(event) {
        if (event.which === 13) {
          event.preventDefault();
          event.stopPropagation();
        }
      }
      if ($table.length) {
        $rowsAndDetails = $table.find('tr, details');
        $rows = $table.find('tbody tr');
        $details = $rowsAndDetails.filter('.package-listing');
        $(input).on({
          keyup: debounce(filterModuleList, 200),
          keydown: preventEnterKey
        });
      }
    }
  };
})(jQuery, Drupal, Drupal.debounce);