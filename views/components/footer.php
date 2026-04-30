<?php if (isset($customScripts)){
            foreach ($customScripts as $customScript){?>
            <script src="/scripts/<?= $customScript?>"></script>
    <?php   }
        }?>
</body>
</html>