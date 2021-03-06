<?php

/**
 * Insert a new appointment
 *
 * @param  array  $args
 *
 * @return int|WP_Error
 */

function shc_appointment( $args = [] ) {
    global $wpdb;

    if ( empty( $args['name'] ) ) {
        return new \WP_Error( 'no-name', __( 'You must provide a name kid.', 'shchealthcare-lite' ) );
    }

    $defaults = [
        'name'    => '',
        'phone'    => '',
        'email'    => '',
        'appointment'    => '',
        'type'    => '',
        'gender'    => '',
        'visited'    => '',
        'address'    => '',
        'notes'    => '',
        'created_by' => get_current_user_id(),
        'created_at' => current_time('mysql'),
    ];

    $data = wp_parse_args($args, $defaults);

    $inserted = $wpdb->insert(
        $wpdb->prefix . 'shc_appointment',
        $data,
        [
            '%s',
            '%d',
            '%s',
            '%d',
            '%d',
            '%d',
            '%d',
            '%s',
            '%s',
            '%s',
            '%s',
        ]
    );

    if (!$inserted) {
        return new \WP_Error('failed-to-insert', __('Failed to insert data', 'shchealthcare-lite'));
    }

    return $wpdb->insert_id;
}


