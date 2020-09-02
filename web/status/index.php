<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" http-equiv="refresh" content="30">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/status_content_style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <?php
        // $get_user = shell_exec('echo "$(date) @ $(hostname)"');
        // echo "$get_user<br/>";

        /**
         * Version
         */
        $get_os = shell_exec('cat /etc/os-release | grep "PRETTY_NAME"');
        $formated_os = preg_replace('/\"/', '', $get_os);
        $formated_os = str_replace('PRETTY_NAME=', '', $formated_os);
        $get_kernel = shell_exec('uname -r');

        /**
         * Uptime
         */
        $get_uptime = shell_exec('uptime -p');

        /**
         * Cpu
         */
        $get_cpu_info = shell_exec('cat /proc/cpuinfo | grep "model name" | uniq');

        /**
         * Temperature
         */
        $get_cpu_temp = shell_exec('cat /sys/class/thermal/thermal_zone0/temp');
        $calcule_cpu_temp = $get_cpu_temp/1000;
        $formated_cpu_temp = number_format((float)$calcule_cpu_temp, 1, '.', '');

        /**
         * Memory
         */
        $get_total_ram = shell_exec('cat /proc/meminfo | grep "MemTotal"');
        $formated_total_ram = str_replace('MemTotal:', '', $get_total_ram);
        $converted_total_ram =  $formated_total_ram/1048576;
        $rounded_total_ram = number_format((float)$converted_total_ram, 2, '.', '');

        $get_free_ram = shell_exec('cat /proc/meminfo | grep "MemFree"');
        $formated_free_ram = str_replace('MemFree:', '', $get_free_ram);
        $converted_free_ram =  $formated_free_ram/1048576;
        $rounded_free_ram = number_format((float)$converted_free_ram, 2, '.', '');

        $get_used_ram = $rounded_total_ram - $rounded_free_ram;

        /**
         * Space
         */
        $get_total_space = shell_exec('df -h | grep "/dev/root"'); 
    ?>
    <body>      
        <!-- Version -->
        <div class="section">
            <div class="title">
                <img src="../img/version.png" class="version_icon">
                <span class="title_text">Version</span>
            </div>
            <div class="content">
                <p>Distribution: <b><?php echo  $formated_os?></b></p>
                <p>Kernel Version: <b><?php echo $get_kernel?></b></p>
            </div>
        </div>

        <hr/>

        <!-- Uptime -->
        <div class="section">
            <div class="title">
                <img src="../img/uptime.png" class="uptime_icon">
                <span class="title_text">Uptime</span>
            </div>
            <div class="content">
                <p>Uptime: <b><?php echo  $get_uptime?></b></p>
            </div>
        </div>

        <hr/>

        <!-- Cpu -->
        <div class="section">
            <div class="title">
                <img src="../img/cpu.png" class="cpu_icon">
                <span class="title_text">CPU</span>
            </div>
            <div class="content">
                <p>Info: <b><?php echo  $get_cpu_info?></b></p>
            </div>
        </div>

        <hr/>

        <!-- Temperature -->
        <div class="section">
            <div class="title">
                <img src="../img/temperature.png" class="temperature_icon">
                <span class="title_text">Temperature</span>
            </div>
            <div class="content">
                <p>Temperature: <b><?php echo  $formated_cpu_temp?> ºC</b></p>
            </div>
        </div>

        <hr/>

        <!-- Memory -->
        <div class="section">
            <div class="title">
                <img src="../img/memory.png" class="memory_icon">
                <span class="title_text">Memory</span>
            </div>
            <div class="content">
                <p>Total RAM: <b><?php echo $rounded_total_ram?> GB</b></p>
                <p>Used RAM: <b><?php echo $get_used_ram?> GB</b></p>
                <p>Free RAM: <b><?php echo $rounded_free_ram?> GB</b></p>
            </div>
        </div>

        <hr/>

        <!-- Storage -->
        <div class="section">
            <div class="title">
                <img src="../img/storage.png" class="storage_icon">
                <span class="title_text">Storage</span>
            </div>
            <div class="content">
                <p>System, Size, Used, Aval, Use%, Mounted in<p>
                <p><b><?php echo $get_total_space?></b></p>
            </div>
        </div>
    </body>
</html>