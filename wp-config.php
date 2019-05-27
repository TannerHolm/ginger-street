
     <?php
     /**
      * The base configuration for WordPress
      *
      * The wp-config.php creation script uses this file during the
      * installation. You don't have to use the web site, you can
      * copy this file to wp-config.php and fill in the values.
      *
      * This file contains the following configurations:
      *
      * * MySQL settings
      * * Secret keys
      * * Database table prefix
      * * ABSPATH
      *
      * @link https://codex.wordpress.org/Editing_wp-config.php
      *
      * @package WordPress
      */

     ## For Development
     // ** MySQL settings - You can get this info from your web host ** //
     /** The name of the database for WordPress */
     define('DB_NAME', 'db_ginger-street');

     /** MySQL database username */
     define('DB_USER', 'root');

     /** MySQL database password */
     define('DB_PASSWORD', 'root');

     /** MySQL hostname */
     define('DB_HOST', 'localhost');

     /** Define the environment, for Roots/Sage */
     define('WP_ENV', 'development');

     /** Database Charset to use in creating database tables. */
     define('DB_CHARSET', 'utf8mb4');

     /** The Database Collate type. Don't change this if in doubt. */
     define('DB_COLLATE', '');
     define('AUTH_KEY',         'V1/wH664kMYlmNdGPmO/f7m3ohchsTI/4JI3mZ3b3+01Z4CEjYifZWfBz1e+SJt363pMmTPzGC+RKE143s/hKg==');
     define('SECURE_AUTH_KEY',  'XNs1Q5z3Qo4rMfoM772BXoVdkCoe0Vkibce2wirXCpDesrx1h5jEVvdgasQtOBJZMjjmA/Sl8oKDsnTv8MKYDw==');
     define('LOGGED_IN_KEY',    'HAknDSvnS3Aqx+u9qkuo2VbhHDLja3XbeTotdNPPsr0iUNzLbRikP/lKtlN8ken1RZOeE/ZMaOtuvBG6bBeEsQ==');
     define('NONCE_KEY',        'v8a+OjHhEHSn1hv83vYC/rCdIedV89m821A3l3ZsxzSIK/0w9gsBoP8hfAFVqgs7U1Vvth9Nml6EYbXnReTskg==');
     define('AUTH_SALT',        'GKhAfC4CUOa1CawPu5vPIh/2MsNfTlxb3fNbfcRaSew899DBX3Z/k54Ce9dOCeRQTKbhW/OtKzKjmuM5frb1SQ==');
     define('SECURE_AUTH_SALT', '+rAO9AP0DIum7KYzrmJQUcat+NJ7MojzhqgYKYmUsX3lVH/giRPRluu4UAj79QGoxFUVJCcj5RtNT8A3RT43bg==');
     define('LOGGED_IN_SALT',   'JTFvbJcbsdlFBoRoPEHS8jHQ/XkZT2nx8FL/gUOxyYVbrgGocJZ0P2qL6oTIrVsjwf2XmLqGUw1FTbJK++4eUg==');
     define('NONCE_SALT',       'Pr6Hscu3w2ZxioT9dtBtIg/EiqMoWey9t8s8teA9XU4wxiZjYoabPX1uT/J60MXl7+d4LtCST9ZpnfR713aR1Q==');


     /**
     * WordPress Database Table prefix.
     *
     * You can have multiple installations in one database if you give each
     * a unique prefix. Only numbers, letters, and underscores please!
     */
     $table_prefix  = 'wp_';

     /**
     * For developers: WordPress debugging mode.
     *
     * Change this to true to enable the display of notices during development.
     * It is strongly recommended that plugin and theme developers use WP_DEBUG
     * in their development environments.
     *
     * For information on other constants that can be used for debugging,
     * visit the Codex.
     *
     * @link https://codex.wordpress.org/Debugging_in_WordPress
     */
     define('WP_DEBUG', false);

     /* That's all, stop editing! Happy blogging. */

     /** Absolute path to the WordPress directory. */
     if ( !defined('ABSPATH') )
           define('ABSPATH', dirname(__FILE__) . '/');

     /** Sets up WordPress vars and included files. */
     require_once(ABSPATH . 'wp-settings.php');


                             
