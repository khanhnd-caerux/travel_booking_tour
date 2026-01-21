<?php
/**
 * PHP Extensions Checker for Mail Functionality
 * 
 * Truy cập: https://yourdomain.com/check-php.php
 */

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Extensions Check - Mail Functionality</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        .section { margin: 20px 0; padding: 15px; background: #f9f9f9; border-radius: 4px; }
        .ok { color: #28a745; font-weight: bold; }
        .error { color: #dc3545; font-weight: bold; }
        .warning { color: #ffc107; font-weight: bold; }
        table { width: 100%; border-collapse: collapse; margin: 10px 0; }
        th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #007bff; color: white; }
        .info { background: #e7f3ff; padding: 10px; border-radius: 4px; margin: 10px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔍 PHP Extensions Check - Mail Functionality</h1>
        
        <div class="section">
            <h2>PHP Version</h2>
            <p><strong>Version:</strong> <?php echo PHP_VERSION; ?></p>
            <p><strong>SAPI:</strong> <?php echo php_sapi_name(); ?></p>
        </div>

        <div class="section">
            <h2>Required Extensions for Mail</h2>
            <table>
                <tr>
                    <th>Extension</th>
                    <th>Status</th>
                    <th>Required For</th>
                </tr>
                <tr>
                    <td>OpenSSL</td>
                    <td><?php echo extension_loaded('openssl') ? '<span class="ok">✅ OK</span>' : '<span class="error">❌ MISSING</span>'; ?></td>
                    <td>SSL/TLS encryption for SMTP</td>
                </tr>
                <tr>
                    <td>Sockets</td>
                    <td><?php echo extension_loaded('sockets') ? '<span class="ok">✅ OK</span>' : '<span class="error">❌ MISSING</span>'; ?></td>
                    <td>SMTP socket connections</td>
                </tr>
                <tr>
                    <td>Stream</td>
                    <td><?php echo function_exists('stream_socket_client') ? '<span class="ok">✅ OK</span>' : '<span class="error">❌ MISSING</span>'; ?></td>
                    <td>Stream socket functions</td>
                </tr>
                <tr>
                    <td>cURL</td>
                    <td><?php echo extension_loaded('curl') ? '<span class="ok">✅ OK</span>' : '<span class="warning">⚠️ Optional</span>'; ?></td>
                    <td>HTTP requests (optional)</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h2>PHP Configuration</h2>
            <table>
                <tr>
                    <th>Setting</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>allow_url_fopen</td>
                    <td><?php echo ini_get('allow_url_fopen') ? '<span class="ok">✅ Enabled</span>' : '<span class="warning">⚠️ Disabled</span>'; ?></td>
                </tr>
                <tr>
                    <td>default_socket_timeout</td>
                    <td><?php echo ini_get('default_socket_timeout'); ?> seconds</td>
                </tr>
                <tr>
                    <td>max_execution_time</td>
                    <td><?php echo ini_get('max_execution_time'); ?> seconds</td>
                </tr>
                <tr>
                    <td>memory_limit</td>
                    <td><?php echo ini_get('memory_limit'); ?></td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h2>OpenSSL Configuration</h2>
            <?php if (extension_loaded('openssl')): ?>
                <table>
                    <tr>
                        <th>Setting</th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>OpenSSL Version</td>
                        <td><?php echo OPENSSL_VERSION_TEXT; ?></td>
                    </tr>
                    <tr>
                        <td>OpenSSL Library Version</td>
                        <td><?php echo OPENSSL_VERSION_NUMBER; ?></td>
                    </tr>
                </table>
            <?php else: ?>
                <p class="error">❌ OpenSSL extension is not loaded. This is REQUIRED for SMTP with SSL/TLS.</p>
            <?php endif; ?>
        </div>

        <div class="section">
            <h2>Test SMTP Connection</h2>
            <div class="info">
                <p><strong>Note:</strong> This will attempt to connect to smtp.gmail.com:465</p>
                <p>Click the button below to test SMTP connection:</p>
                <form method="POST">
                    <button type="submit" name="test_smtp" style="padding: 10px 20px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">
                        Test SMTP Connection
                    </button>
                </form>
            </div>

            <?php
            if (isset($_POST['test_smtp'])) {
                echo '<div class="section">';
                echo '<h3>SMTP Connection Test Result</h3>';
                
                $host = 'smtp.gmail.com';
                $port = 465;
                $timeout = 10;
                
                echo "<p><strong>Testing connection to:</strong> {$host}:{$port}</p>";
                
                if (function_exists('stream_socket_client')) {
                    $context = stream_context_create([
                        'ssl' => [
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        ]
                    ]);
                    
                    $start = microtime(true);
                    $socket = @stream_socket_client(
                        "ssl://{$host}:{$port}",
                        $errno,
                        $errstr,
                        $timeout,
                        STREAM_CLIENT_CONNECT,
                        $context
                    );
                    $end = microtime(true);
                    $duration = round(($end - $start) * 1000, 2);
                    
                    if ($socket) {
                        echo '<p class="ok">✅ Connection successful! (Duration: ' . $duration . 'ms)</p>';
                        fclose($socket);
                    } else {
                        echo '<p class="error">❌ Connection failed!</p>';
                        echo '<p><strong>Error Code:</strong> ' . $errno . '</p>';
                        echo '<p><strong>Error Message:</strong> ' . $errstr . '</p>';
                        
                        if ($errno == 110 || strpos($errstr, 'timed out') !== false) {
                            echo '<div class="info">';
                            echo '<p><strong>⚠️ Connection Timeout</strong></p>';
                            echo '<p>Possible causes:</p>';
                            echo '<ul>';
                            echo '<li>Port 465 is blocked by firewall</li>';
                            echo '<li>Hosting restricts outbound SMTP connections</li>';
                            echo '<li>Network issues</li>';
                            echo '</ul>';
                            echo '<p><strong>Solution:</strong> Try using sendmail or contact hosting to open port 465</p>';
                            echo '</div>';
                        } elseif ($errno == 111 || strpos($errstr, 'Connection refused') !== false) {
                            echo '<div class="info">';
                            echo '<p><strong>⚠️ Connection Refused</strong></p>';
                            echo '<p>The server is not accepting connections on this port.</p>';
                            echo '</div>';
                        }
                    }
                } else {
                    echo '<p class="error">❌ stream_socket_client() function is not available</p>';
                }
                
                echo '</div>';
            }
            ?>
        </div>

        <div class="section">
            <h2>Recommendations</h2>
            <div class="info">
                <?php
                $issues = [];
                
                if (!extension_loaded('openssl')) {
                    $issues[] = 'Install OpenSSL extension';
                }
                
                if (!extension_loaded('sockets')) {
                    $issues[] = 'Install Sockets extension';
                }
                
                if (!function_exists('stream_socket_client')) {
                    $issues[] = 'Enable stream functions';
                }
                
                if (empty($issues)) {
                    echo '<p class="ok">✅ All required extensions are installed!</p>';
                    echo '<p><strong>Next steps:</strong></p>';
                    echo '<ol>';
                    echo '<li>Ensure <code>QUEUE_CONNECTION=sync</code> in .env</li>';
                    echo '<li>Configure mail settings in .env (port 465 with SSL recommended for cPanel)</li>';
                    echo '<li>Test email using <code>/test-mail</code> route</li>';
                    echo '</ol>';
                } else {
                    echo '<p class="error">❌ Issues found:</p>';
                    echo '<ul>';
                    foreach ($issues as $issue) {
                        echo '<li>' . $issue . '</li>';
                    }
                    echo '</ul>';
                    echo '<p><strong>Contact your hosting provider to enable these extensions.</strong></p>';
                }
                ?>
            </div>
        </div>

        <div class="section">
            <p style="text-align: center; color: #666; margin-top: 30px;">
                <small>Generated at: <?php echo date('Y-m-d H:i:s'); ?></small>
            </p>
        </div>
    </div>
</body>
</html>

