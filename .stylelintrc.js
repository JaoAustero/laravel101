module.exports = {
    root: true,

    rules:
    {
        // Specify disallow at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-blacklist
        'at-rule-blacklist': null,

        // We require emptyline
        // Reference: https://stylelint.io/user-guide/rules/at-rule-empty-line-before
        'at-rule-empty-line-before': [
            'always',
            {
                'ignore': [
                    'after-comment',
                    'first-nested',
                    'inside-block',
                    'blockless-after-same-name-blockless',
                    'blockless-after-blockless',
                ],
            }
        ],

        // Use lowercase only on naming at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-name-case
        'at-rule-name-case': 'lower',

        // Allow multi line or not on at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-name-newline-after
        'at-rule-name-newline-after': 'always-multi-line',

        // We require space after at-rule
        // Reference: https://stylelint.io/user-guide/rules/at-rule-name-space-after
        'at-rule-name-space-after': 'always',

        // Disallow vendor prefix at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-no-vendor-prefix
        'at-rule-no-vendor-prefix': true,

        // Specify the require properties of at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-property-requirelist
        'at-rule-property-requirelist': {
            'font-face': [
                'font-display',
                'font-family',
                'src'
            ]
        },

        // We required new line after semicolon of at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-semicolon-newline-after
        'at-rule-semicolon-newline-after': 'always',

        // We don't want white-space before semicolon of at-rules
        // Reference: https://stylelint.io/user-guide/rules/at-rule-semicolon-space-before
        'at-rule-semicolon-space-before': 'never',

        // Allow at-rules on the list
        // Reference: https://stylelint.io/user-guide/rules/at-rule-whitelist
        'at-rule-whitelist': [
            'keyframes',
            'media',
            'include',
            'import',
            'each',
            'if',
            'else if',
            'else',
            'mixin',
            'function',
            'return',
            'warn',
            'error',
            'font-face',
            'supports'
        ],

        // We don't require empty line before closing brace
        // Reference: https://stylelint.io/user-guide/rules/block-closing-brace-empty-line-before
        'block-closing-brace-empty-line-before': 'never',

        // We require newline after closing brace
        // Reference: https://stylelint.io/user-guide/rules/block-closing-brace-newline-after
        'block-closing-brace-newline-after': 'always',

        // We want new line always before closing braces
        // Reference: https://stylelint.io/user-guide/rules/block-closing-brace-newline-before
        'block-closing-brace-newline-before': 'always-multi-line',

        // Required whitespace every after closing brace if single line
        // Reference: https://stylelint.io/user-guide/rules/block-closing-brace-space-after
        'block-closing-brace-space-after': 'always-single-line',

        // Required whitespace before closing of brace if single line only
        // Reference: https://stylelint.io/user-guide/rules/block-closing-brace-space-before
        'block-closing-brace-space-before': 'always-single-line',

        // Disallow empty block of code
        // Reference: https://stylelint.io/user-guide/rules/block-no-empty
        'block-no-empty': true,

        // Disallow single line of style or whitespace after opening brace
        // Reference: https://stylelint.io/user-guide/rules/block-opening-brace-newline-after
        'block-opening-brace-newline-after': 'always',

        // Disallow new line of opening brace
        // Reference: https://stylelint.io/user-guide/rules/block-opening-brace-newline-before
        'block-opening-brace-newline-before': 'never-single-line',

        // Require space after opening brace when single line
        // Reference: https://stylelint.io/user-guide/rules/block-opening-brace-space-after
        'block-opening-brace-space-after': 'always-single-line',

        // Required whitespace before opening brace
        // Reference: https://stylelint.io/user-guide/rules/block-opening-brace-space-before
        'block-opening-brace-space-before': 'always',

        // Require upper case on hex color
        // Reference: https://stylelint.io/user-guide/rules/color-hex-case
        'color-hex-case': 'upper',

        // Require long hex code
        // Reference: https://stylelint.io/user-guide/rules/color-hex-length
        'color-hex-length': 'long',

        // We prefer hex code over named
        // Reference: https://stylelint.io/user-guide/rules/color-named
        'color-named': 'never',

        // Allow hex color
        // Reference: https://stylelint.io/user-guide/rules/color-no-hex
        'color-no-hex': null,

        // Disallow shorthand hex
        // Reference: https://stylelint.io/user-guide/rules/color-no-invalid-hex
        'color-no-invalid-hex': true,

        // We require empty line after comment to make it as divider or 
        // that comment is for the new line, But allows comment after brace
        // Reference: https://stylelint.io/user-guide/rules/comment-empty-line-before
        'comment-empty-line-before': [
            'always',
            {
                'except': ['first-nested']
            }
        ],

        // Disallow empty comments
        // Reference: https://stylelint.io/user-guide/rules/comment-no-empty
        'comment-no-empty': true,

        // We require space before the comment to have a clean
        // and readable comment
        // Reference: https://stylelint.io/user-guide/rules/comment-whitespace-inside
        'comment-whitespace-inside': 'always',

        // We don;t have any black listed words
        // Reference: https://stylelint.io/user-guide/rules/comment-word-blacklist
        'comment-word-blacklist': null,

        // Special patter for media
        // Reference: https://stylelint.io/user-guide/rules/custom-media-pattern
        'custom-media-pattern': null,

        // Require comment before the custom property to avoid confusing on the team
        // Reference: https://stylelint.io/user-guide/rules/custom-property-empty-line-before
        'custom-property-empty-line-before': [
            'always',
            {
                'except': [
                    'after-comment',
                    'after-custom-property',
                ]
            }
        ],

        // Require prefix `uis-` to maintain the proper and consistent naming on style
        // Reference: https://stylelint.io/user-guide/rules/custom-property-pattern
        'custom-property-pattern': 'uis-.+',

        // Disallow space after `!`
        // Reference: https://stylelint.io/user-guide/rules/declaration-bang-space-after
        'declaration-bang-space-after': 'never',

        // Require whitespace before `!`
        // Reference: https://stylelint.io/user-guide/rules/declaration-bang-space-before
        'declaration-bang-space-before': 'always',

        // Disallow duplicate properties, this will help the team
        // avoid duplication of property
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-no-duplicate-properties
        'declaration-block-no-duplicate-properties': true,

        // Require long hand, but ignore some short hand
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-no-redundant-longhand-properties
        'declaration-block-no-redundant-longhand-properties': [
            true,
            {
                'ignoreShorthands': [
                    'margin',
                    'padding',
                    'transition'
                ]
            }
        ],

        // Disallow shorthand properties that override related longhand property
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-no-shorthand-property-overrides
        'declaration-block-no-shorthand-property-overrides': true,

        // After first property `;` requires new line for another property or disallow whitespace after `;`
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-semicolon-newline-after
        'declaration-block-semicolon-newline-after': null,

        // Require new line after semicolon if multiple properties
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-semicolon-newline-before
        'declaration-block-semicolon-newline-before': null,

        // Requires whitespace after semicolon on single line
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-semicolon-space-after
        'declaration-block-semicolon-space-after': 'always-single-line',

        // Disallow whitespace before semicolon
        // Reference:https://stylelint.io/user-guide/rules/declaration-block-semicolon-space-before
        'declaration-block-semicolon-space-before': 'never',

        // Require 1 property per line
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-single-line-max-declarations
        'declaration-block-single-line-max-declarations': 1,

        // Requires trailing semicolon
        // Reference: https://stylelint.io/user-guide/rules/declaration-block-trailing-semicolon
        'declaration-block-trailing-semicolon': 'always',

        // Requires multiple line  on multiple values to avoid long horizontal code and more readable
        // Reference: https://stylelint.io/user-guide/rules/declaration-colon-newline-after
        'declaration-colon-newline-after': 'always-multi-line',

        // Requires whitespace after colon
        // Reference: https://stylelint.io/user-guide/rules/declaration-colon-space-after
        'declaration-colon-space-after': 'always',

        // Disallow whitespace before colon
        // Reference: https://stylelint.io/user-guide/rules/declaration-colon-space-before
        'declaration-colon-space-before': 'never',

        // Disallow new line after properpty, except it has comment on top
        // Reference: https://stylelint.io/user-guide/rules/declaration-empty-line-before
        'declaration-empty-line-before': null,

        // Allow `!important` we use this mostly on overriding some style mostly on
        // themes and other utillities or 3rd party css, But don't abuse it
        // Reference: https://stylelint.io/user-guide/rules/declaration-no-important
        'declaration-no-important': null,

        // Specify blacklist properties
        // Reference: https://stylelint.io/user-guide/rules/declaration-property-unit-blacklist
        'declaration-property-unit-blacklist': null,

        // Specify allowed properties only
        // Reference: https://stylelint.io/user-guide/rules/declaration-property-unit-whitelist
        'declaration-property-unit-whitelist': null,

        // Specify black list value
        // Reference: https://stylelint.io/user-guide/rules/declaration-property-value-blacklist
        'declaration-property-value-blacklist': null,

        // Specify allowed value only
        // Reference: https://stylelint.io/user-guide/rules/declaration-property-value-whitelist
        'declaration-property-value-whitelist': null,

        // Requires quotes around every font name that is not keyword
        // Reference: https://stylelint.io/user-guide/rules/font-family-name-quotes
        'font-family-name-quotes': 'always-unless-keyword',

        // Prevent duplication of font family name
        // Reference: https://stylelint.io/user-guide/rules/font-family-no-duplicate-names
        'font-family-no-duplicate-names': true,

        // Disallow missing generic families in lists of fonts family names
        // Reference: https://stylelint.io/user-guide/rules/font-family-no-missing-generic-family-keyword
        'font-family-no-missing-generic-family-keyword': true,

        // Require numeric font weight
        // Reference: https://stylelint.io/user-guide/rules/font-weight-notation
        'font-weight-notation': 'numeric',

        // Specify black list functions
        // Reference: https://stylelint.io/user-guide/rules/function-blacklist
        'function-blacklist': null,

        // No invalid expression in calc
        // Reference: https://stylelint.io/user-guide/rules/function-calc-no-invalid
        'function-calc-no-invalid': true,

        // Requires space before and after of operator
        // Reference: https://stylelint.io/user-guide/rules/function-calc-no-unspaced-operator
        'function-calc-no-unspaced-operator': true,

        // Requires newline or disallow whitespace after commas when not multiline
        // Reference: https://stylelint.io/user-guide/rules/function-comma-newline-after
        'function-comma-newline-after': null,

        // Requires newline before comma
        // Reference: https://stylelint.io/user-guide/rules/function-comma-newline-before
        'function-comma-newline-before': null,

        // Requires space after comman when single line
        // Reference: https://stylelint.io/user-guide/rules/function-comma-space-after
        'function-comma-space-after': 'always-single-line',

        // Requires whitespace before comman in function
        // Reference: https://stylelint.io/user-guide/rules/function-comma-space-before
        'function-comma-space-before': null,

        // Prevent error on not valid direction in gradient
        // Reference: https://stylelint.io/user-guide/rules/function-linear-gradient-no-nonstandard-direction
        'function-linear-gradient-no-nonstandard-direction': true,

        // Disallow empty lines inside of functions
        // Reference: https://stylelint.io/user-guide/rules/function-max-empty-lines
        'function-max-empty-lines': 0,

        // Require all function in lowercase
        // Reference: https://stylelint.io/user-guide/rules/function-name-case
        'function-name-case': 'lower',

        // Require multiline on function parameters to make it more readable and avoid long
        // horizontal code if this multiline parameters
        // Reference: https://stylelint.io/user-guide/rules/function-parentheses-newline-inside
        'function-parentheses-newline-inside': 'always-multi-line',

        // Make it null because we require multiline always
        // Reference: https://stylelint.io/user-guide/rules/function-parentheses-space-inside
        'function-parentheses-space-inside': null,

        // Disallow scheme-relative urls
        // Reference: https://stylelint.io/user-guide/rules/function-url-no-scheme-relative
        'function-url-no-scheme-relative': true,

        // Require quotes for url
        // Reference: https://stylelint.io/user-guide/rules/function-url-quotes
        'function-url-quotes': 'always',

        // Specify blacklist url
        // Reference: https://stylelint.io/user-guide/rules/function-url-scheme-blacklist
        'function-url-scheme-blacklist': null,

        // Specify allowed or whitelist url
        // Reference: https://stylelint.io/user-guide/rules/function-url-scheme-whitelist
        'function-url-scheme-whitelist': null,

        // Specify allowed or whitelist functions
        // Reference: https://stylelint.io/user-guide/rules/function-whitelist
        'function-whitelist': null,

        // Requires whitespace on multiple functions in single line
        // Reference: https://stylelint.io/user-guide/rules/function-whitespace-after
        'function-whitespace-after': 'always',

        // Specify indention
        // Reference: https://stylelint.io/user-guide/rules/indentation
        'indentation': [
            4 | 'space',
            {
                'baseIndentLevel': 1,
            },
            {
                'indentInsideParens': 'twice',
            },
            {
                'indentClosingBrace': false,
            },
        ],

        // Disallow `!important` inside of keyframes
        // Reference: https://stylelint.io/user-guide/rules/keyframe-declaration-no-important
        'keyframe-declaration-no-important': true,

        // Specify pattern keyframes name to be consistent
        // Reference: https://stylelint.io/user-guide/rules/keyframes-name-pattern
        'keyframes-name-pattern': null,

        // Disallow units for zero length
        // Reference: https://stylelint.io/user-guide/rules/length-zero-no-unit
        'length-zero-no-unit': null,

        // Specify unix or windows linebreaks
        // Reference: https://stylelint.io/user-guide/rules/linebreaks
        'linebreaks': null,

        // Limit the number of adjacent empty lines
        // Reference: https://stylelint.io/user-guide/rules/max-empty-lines
        'max-empty-lines': 5,

        // Limit the length of the line
        // Reference: https://stylelint.io/user-guide/rules/max-line-length
        'max-line-length': [
            80,
            {
                'ignore': [
                    'non-comments',
                ]
            }
        ],

        // Limit the depth of nesting
        // Reference: https://stylelint.io/user-guide/rules/max-nesting-depth
        'max-nesting-depth': 4,

        // Require whitespace after colon inside of parameter of @media
        // Reference: https://stylelint.io/user-guide/rules/media-feature-colon-space-after
        'media-feature-colon-space-after': 'always',

        // Disallow whitespace before colon inside of parameter of @media
        // Reference: https://stylelint.io/user-guide/rules/media-feature-colon-space-before
        'media-feature-colon-space-before': 'never',

        // Specify black list of 
        // Reference: https://stylelint.io/user-guide/rules/media-feature-name-blacklist
        'media-feature-name-blacklist': null,

        // Require lower case media parameter
        // Reference: https://stylelint.io/user-guide/rules/media-feature-name-case
        'media-feature-name-case': 'lower',

        // Disallow unknown parameter
        // Reference: https://stylelint.io/user-guide/rules/media-feature-name-no-unknown
        'media-feature-name-no-unknown': true,

        // Disallow vendor prefixes on media argument
        // Reference: https://stylelint.io/user-guide/rules/media-feature-name-no-vendor-prefix
        'media-feature-name-no-vendor-prefix': true,

        // Specify arguments value that allowed
        // Reference: https://stylelint.io/user-guide/rules/media-feature-name-value-whitelist
        'media-feature-name-value-whitelist': null,

        // Specify arguments
        // Reference: https://stylelint.io/user-guide/rules/media-feature-name-whitelist
        'media-feature-name-whitelist': null,

        // Disallow space inside of media parameter
        // Reference: https://stylelint.io/user-guide/rules/media-feature-parentheses-space-inside
        'media-feature-parentheses-space-inside': 'never',

        // Require whitespace after media operator
        // Reference: https://stylelint.io/user-guide/rules/media-feature-range-operator-space-after
        'media-feature-range-operator-space-after': 'always',

        // Require whitespace before media operator
        // Reference: https://stylelint.io/user-guide/rules/media-feature-range-operator-space-before
        'media-feature-range-operator-space-before': 'always',

        // Require newline after comma on media
        // Reference: https://stylelint.io/user-guide/rules/media-query-list-comma-newline-after
        'media-query-list-comma-newline-after': 'always-multi-line',

        // Require new line before comma
        // Reference: https://stylelint.io/user-guide/rules/media-query-list-comma-newline-before
        'media-query-list-comma-newline-before': null,

        // Require whitespace after comma
        // Reference: https://stylelint.io/user-guide/rules/media-query-list-comma-space-after
        'media-query-list-comma-space-after': 'always-single-line',

        // Require whitespace before comma
        // Reference: https://stylelint.io/user-guide/rules/media-query-list-comma-space-before
        'media-query-list-comma-space-before': null,

        // Disallow selectors of lower specifity from coming after overriding selectors
        // of higher specificity
        // Reference: https://stylelint.io/user-guide/rules/no-descending-specificity
        'no-descending-specificity': null,

        // Disallow duplicate imports
        // Reference: https://stylelint.io/user-guide/rules/no-duplicate-at-import-rules
        'no-duplicate-at-import-rules': true,

        // Disallow duplicate selectors
        // Reference: https://stylelint.io/user-guide/rules/no-duplicate-selectors
        'no-duplicate-selectors': null,

        // No empty line
        // Reference: https://stylelint.io/user-guide/rules/no-empty-first-line
        'no-empty-first-line': true,

        // Disallow empty file
        // Reference: https://stylelint.io/user-guide/rules/no-empty-source
        'no-empty-source': true,

        // Disallow trailing whitespace
        // Reference: https://stylelint.io/user-guide/rules/no-eol-whitespace
        'no-eol-whitespace': true,

        // Disallow extra semicolns
        // Reference: https://stylelint.io/user-guide/rules/no-extra-semicolons
        'no-extra-semicolons': true,

        // Disallow double slash comment inside of property
        // Reference: https://stylelint.io/user-guide/rules/no-invalid-double-slash-comments
        'no-invalid-double-slash-comments': true,

        // Requires newline every end of the file
        // Reference: https://stylelint.io/user-guide/rules/no-missing-end-of-source-newline
        'no-missing-end-of-source-newline': true,

        // Disallow unkown animation
        // Reference: https://stylelint.io/user-guide/rules/no-unknown-animations
        'no-unknown-animations': true,

        // Requires number zero on leading
        // Reference: https://stylelint.io/user-guide/rules/number-leading-zero
        'number-leading-zero': 'always',

        // Limit the number of decimal places
        // Reference: https://stylelint.io/user-guide/rules/number-max-precision
        'number-max-precision': 3,

        // Disallow trailing number zero
        // Reference: https://stylelint.io/user-guide/rules/number-no-trailing-zeros
        'number-no-trailing-zeros': true,

        // Specify properties not allowed
        // Reference: https://stylelint.io/user-guide/rules/property-blacklist
        'property-blacklist': null,

        // Require lower case on property
        // Reference: https://stylelint.io/user-guide/rules/property-case
        'property-case': 'lower',

        // Disallow unknown properties
        // Reference: https://stylelint.io/user-guide/rules/property-no-unknown
        'property-no-unknown': true,

        // Disallow vendor prefix property, autoprefixed should handle that
        // Reference: https://stylelint.io/user-guide/rules/property-no-vendor-prefix
        'property-no-vendor-prefix': true,

        // Specify allow properties
        // Reference: https://stylelint.io/user-guide/rules/property-whitelist
        'property-whitelist': null,

        // Require empty line before declaration
        // Reference: https://stylelint.io/user-guide/rules/rule-empty-line-before
        'rule-empty-line-before': [
            'always',
            {
                'ignore': [
                    'after-comment',
                    'first-nested',
                    'inside-block',
                ]
            }
        ],

        // Require whitespace inside of brackets
        // Reference: https://stylelint.io/user-guide/rules/selector-attribute-brackets-space-inside
        'selector-attribute-brackets-space-inside': 'never',

        // Specify disallow operator inside brackers
        // Reference: https://stylelint.io/user-guide/rules/selector-attribute-operator-blacklist
        'selector-attribute-operator-blacklist': null,

        // Disallow space after operator of selector attribute
        // Reference: https://stylelint.io/user-guide/rules/selector-attribute-operator-space-after
        'selector-attribute-operator-space-after': 'never',

        // Disallow space before operator of selector attribute
        // Reference: https://stylelint.io/user-guide/rules/selector-attribute-operator-space-before
        'selector-attribute-operator-space-before': 'never',

        // Specify allow operator on selector attribute
        // Reference: https://stylelint.io/user-guide/rules/selector-attribute-operator-whitelist
        'selector-attribute-operator-whitelist': null,

        // Require qoutes on value of selector attribute
        // Reference: https://stylelint.io/user-guide/rules/selector-attribute-quotes
        'selector-attribute-quotes': 'always',

        // Specify pattern of classes
        // Reference: https://stylelint.io/user-guide/rules/selector-class-pattern
        'selector-class-pattern': 'uis-[a-z]+.',

        // Specify selector combinator black list
        // Reference: https://stylelint.io/user-guide/rules/selector-combinator-blacklist
        'selector-combinator-blacklist': null,

        // Requires space after selector combinator
        // Reference: https://stylelint.io/user-guide/rules/selector-combinator-space-after
        'selector-combinator-space-after': 'always',

        // Requires space before selector combinator
        // Reference: https://stylelint.io/user-guide/rules/selector-combinator-space-before
        'selector-combinator-space-before': 'always',

        // Specify selector combinator allowed
        // Reference: https://stylelint.io/user-guide/rules/selector-combinator-whitelist
        'selector-combinator-whitelist': null,

        // Disallow non-space characters for descendant cominators of selectors
        // Reference: https://stylelint.io/user-guide/rules/selector-descendant-combinator-no-non-space
        'selector-descendant-combinator-no-non-space': true,

        // Specify patter of ID value
        // Reference: https://stylelint.io/user-guide/rules/selector-id-pattern
        'selector-id-pattern': null,

        // Require new line after comma in selector
        // Reference: https://stylelint.io/user-guide/rules/selector-list-comma-newline-after
        'selector-list-comma-newline-after': 'always-multi-line',

        // Require new line before comma in selector
        // Reference: https://stylelint.io/user-guide/rules/selector-list-comma-newline-before
        'selector-list-comma-newline-before': null,

        // Require whitespace after comma in selector
        // Reference: https://stylelint.io/user-guide/rules/selector-list-comma-space-after
        'selector-list-comma-space-after': 'always-single-line',

        // Require whitespace before comma in selector
        // Reference: https://stylelint.io/user-guide/rules/selector-list-comma-space-before
        'selector-list-comma-space-before': 'never',

        // Limit the number for attribute selector
        // Reference: https://stylelint.io/user-guide/rules/selector-max-attribute
        'selector-max-attribute': 2,

        // Limit the number of class
        // Reference: https://stylelint.io/user-guide/rules/selector-max-class
        'selector-max-class': 4,

        // Limit the number for combinators
        // Reference: https://stylelint.io/user-guide/rules/selector-max-combinators
        'selector-max-combinators': 4,

        // Limit the number of compound selectors
        // Reference: https://stylelint.io/user-guide/rules/selector-max-compound-selectors
        'selector-max-compound-selectors': 4,

        // Limit the number of adjacent of empty lines
        // Reference: https://stylelint.io/user-guide/rules/selector-max-empty-lines
        'selector-max-empty-lines': 0,

        // Limit the number of ID selectors in a selector
        // Reference: https://stylelint.io/user-guide/rules/selector-max-id
        'selector-max-id': 2,

        // Limit the number for pseudo-classes in a selector
        // Reference: https://stylelint.io/user-guide/rules/selector-max-pseudo-class
        'selector-max-pseudo-class': 4,

        // Limit the specify to selectors
        // Reference: https://stylelint.io/user-guide/rules/selector-max-specificity
        'selector-max-specificity': null,

        // Limit the number of type in a selectors
        // Reference: https://stylelint.io/user-guide/rules/selector-max-type
        'selector-max-type': 4,

        // Limit the number of universal selectors
        // Reference: https://stylelint.io/user-guide/rules/selector-max-universal
        'selector-max-universal': 1,

        // Specify pattern of nested selectors
        // Reference: https://stylelint.io/user-guide/rules/selector-nested-pattern
        'selector-nested-pattern': null,

        // Allow qualifying a selector type
        // Reference: https://stylelint.io/user-guide/rules/selector-no-qualifying-type
        'selector-no-qualifying-type': null,

        // Disallow vendor prefix
        // Reference: https://stylelint.io/user-guide/rules/selector-no-vendor-prefix
        'selector-no-vendor-prefix': null,

        // Specify pseudo-class blacklist
        // Reference: https://stylelint.io/user-guide/rules/selector-pseudo-class-blacklist
        'selector-pseudo-class-blacklist': null,

        // Require pseudo-class in lower case
        // Reference: https://stylelint.io/user-guide/rules/selector-pseudo-class-case
        'selector-pseudo-class-case': 'lower',

        // Disallow unknown pseudo-class
        // Reference: https://stylelint.io/user-guide/rules/selector-pseudo-class-no-unknown
        'selector-pseudo-class-no-unknown': true,

        // Disallow space inside parameter of pseudo-class paramtere
        // Reference: https://stylelint.io/user-guide/rules/selector-pseudo-class-parentheses-space-inside
        'selector-pseudo-class-parentheses-space-inside': 'never',

        // Specify allow pseudo-class
        // Reference: https://stylelint.io/user-guide/rules/selector-pseudo-class-whitelist
        'selector-pseudo-class-whitelist': null,

        // Specify not allowed pseudo-element
        // Reference: https://stylelint.io/user-guide/rules/selector-pseudo-element-blacklist
        'selector-pseudo-element-blacklist': null,

        // Require lower on pseudo-element
        // Reference: https://stylelint.io/user-guide/rules/selector-pseudo-element-case
        'selector-pseudo-element-case': 'lower',

        // Require single colon only in pseudo
        // Reference: https://stylelint.io/user-guide/rules/selector-pseudo-element-colon-notation
        'selector-pseudo-element-colon-notation': 'single',

        // Disallow unknown pseudo-element
        // Reference: https://stylelint.io/user-guide/rules/selector-pseudo-element-no-unknown
        'selector-pseudo-element-no-unknown': true,

        // Specify alloweed pseudo-element
        // Reference: https://stylelint.io/user-guide/rules/selector-pseudo-element-whitelist
        'selector-pseudo-element-whitelist': null,

        // Require lower case on selector type case
        // Reference: https://stylelint.io/user-guide/rules/selector-type-case
        'selector-type-case': 'lower',

        // Disallow unknown selector type
        // Reference: https://stylelint.io/user-guide/rules/selector-type-no-unknown
        'selector-type-no-unknown': true,

        // Disallow redundant short property
        // Reference: https://stylelint.io/user-guide/rules/shorthand-property-no-redundant-values
        'shorthand-property-no-redundant-values': true,

        // Disallow newline on string,
        // Reference: https://stylelint.io/user-guide/rules/string-no-newline
        'string-no-newline': true,

        // Require single qoute on string,
        // Reference: https://stylelint.io/user-guide/rules/string-quotes
        'string-quotes': 'single',

        // Set minimum in millseconds
        // Referene: https://stylelint.io/user-guide/rules/time-min-milliseconds
        'time-min-milliseconds': 150,

        // Disallow unicode
        // Reference: https://stylelint.io/user-guide/rules/unicode-bom
        'unicode-bom': null,

        // Specify blacklist units
        // Reference: https://stylelint.io/user-guide/rules/unit-blacklist
        'unit-blacklist': null,

        // Require lower case on units
        // Reference: https://stylelint.io/user-guide/rules/unit-case
        'unit-case': 'lower',

        // Disallow unknown unit case
        // Reference: https://stylelint.io/user-guide/rules/unit-no-unknown
        'unit-no-unknown': true,

        // Specify allowed unit
        // Reference: https://stylelint.io/user-guide/rules/unit-whitelist
        'unit-whitelist': null,

        // Required lower case on value keyword case
        // Reference: https://stylelint.io/user-guide/rules/value-keyword-case
        'value-keyword-case': null,

        // Disallow new line after comma in value
        // Reference: https://stylelint.io/user-guide/rules/value-list-comma-newline-after
        'value-list-comma-newline-after': null,

        // Disallow new line before comma in value
        // Reference: https://stylelint.io/user-guide/rules/value-list-comma-newline-before
        'value-list-comma-newline-before': null,

        // Require space after comma
        // Reference: https://stylelint.io/user-guide/rules/value-list-comma-space-after
        'value-list-comma-space-after': 'always-single-line',

        // Require space before comma
        // Reference: https://stylelint.io/user-guide/rules/value-list-comma-space-before
        'value-list-comma-space-before': null,

        // Disallow empty lines on values
        // Reference: https://stylelint.io/user-guide/rules/value-list-max-empty-lines
        'value-list-max-empty-lines': 0,

        // Disalow vendor prefix
        // Reference: https://stylelint.io/user-guide/rules/value-no-vendor-prefix
        'value-no-vendor-prefix': true,
    }
}