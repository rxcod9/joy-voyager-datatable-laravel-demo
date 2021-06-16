<?php

$finder = PhpCsFixer\Finder::create()
    ->notPath('spark')
    ->notPath('bootstrap')
    ->notPath('storage')
    ->notPath('vendor')
    ->in(__DIR__ . '/app')
    ->in(__DIR__ . '/tests')
    ->name('*.php')
    ->name('_ide_helper')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

$config = new PhpCsFixer\Config();
return $config->setRules([
    '@PSR2'                                  => true,
    'array_indentation'                      => true,
    'array_syntax'                           => ['syntax' => 'short'],
    'combine_consecutive_unsets'             => true,
    'class_attributes_separation'            => ['elements' => ['method' => 'one']],
    'multiline_whitespace_before_semicolons' => true,
    'single_quote'                           => true,
    'binary_operator_spaces'                 => [
        'operators' => [
            '=>' => 'align_single_space_minimal',
            '='  => 'align_single_space_minimal',
        ],
    ],
    // 'blank_line_after_opening_tag' => true,
    // 'blank_line_before_return' => true,
    'braces' => [
        'allow_single_line_closure' => true,
    ],
    // 'cast_spaces' => true,
    // 'class_definition' => array('singleLine' => true),
    'concat_space'              => ['spacing' => 'one'],
    'declare_equal_normalize'   => true,
    'function_typehint_space'   => true,
    'single_line_comment_style' => ['comment_types' => ['hash']],
    'include'                   => true,
    'lowercase_cast'            => true,
    // 'native_function_casing' => true,
    // 'new_with_braces' => true,
    // 'no_blank_lines_after_class_opening' => true,
    // 'no_blank_lines_after_phpdoc' => true,
    // 'no_empty_comment' => true,
    // 'no_empty_phpdoc' => true,
    // 'no_empty_statement' => true,
    'no_extra_blank_lines' => [
        'tokens' => [
            'case',
            'continue',
            'curly_brace_block',
            'default',
            'extra',
            'parenthesis_brace_block',
            'square_brace_block',
            'switch',
            'throw',
            'use',
            'use_trait',
        ],
    ],
    // 'no_leading_import_slash' => true,
    // 'no_leading_namespace_whitespace' => true,
    // 'no_mixed_echo_print' => array('use' => 'echo'),
    'no_multiline_whitespace_around_double_arrow' => true,
    // 'no_short_bool_cast' => true,
    // 'no_singleline_whitespace_before_semicolons' => true,
    'no_spaces_around_offset' => true,
    // 'no_trailing_comma_in_list_call' => true,
    // 'no_trailing_comma_in_singleline_array' => true,
    // 'no_unneeded_control_parentheses' => true,
    'no_unused_imports' => true,
    // 'ordered_imports' => true,
    'no_whitespace_before_comma_in_array' => true,
    'no_whitespace_in_blank_line'         => true,
    // 'normalize_index_brace' => true,
    'object_operator_without_whitespace' => true,
    // 'php_unit_fqcn_annotation' => true,
    'phpdoc_align' => true,
    // 'phpdoc_annotation_without_dot' => true,
    // 'phpdoc_indent' => true,
    // 'phpdoc_inline_tag' => true,
    // 'phpdoc_no_access' => true,
    // 'phpdoc_no_alias_tag' => true,
    // 'phpdoc_no_empty_return' => true,
    // 'phpdoc_no_package' => true,
    'phpdoc_no_useless_inheritdoc' => true,
    // 'phpdoc_return_self_reference' => true,
    // 'phpdoc_scalar' => true,
    // 'phpdoc_separation' => true,
    // 'phpdoc_single_line_var_spacing' => true,
    // 'phpdoc_summary' => true,
    // 'phpdoc_to_comment' => true,
    // 'phpdoc_trim' => true,
    // 'phpdoc_types' => true,
    // 'phpdoc_var_without_name' => true,
    // 'increment_style' => ['style' => 'pre'],
    // 'return_type_declaration' => true,
    // 'self_accessor' => true,
    // 'short_scalar_cast' => true,
    'single_blank_line_before_namespace' => true,
    // 'single_class_element_per_statement' => true,
    'space_after_semicolon' => true,
    // 'standardize_not_equals' => true,
    'ternary_operator_spaces' => true,
    // 'trailing_comma_in_multiline_array' => true,
    'trim_array_spaces'               => true,
    'unary_operator_spaces'           => true,
    'whitespace_after_comma_in_array' => true,
])
->setFinder($finder);
