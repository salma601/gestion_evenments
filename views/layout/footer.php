<?php
// HTML minifier
function minify_html($html) {
  return preg_replace(['/>\s+</','/\n+/'], ['><',''], $html);
}
$html = ob_get_clean();
echo minify_html($html);
?>
</main>
<footer role="contentinfo">
  <p>&copy; 2025 Gestion des Événements. Tous droits réservés.</p>
</footer>
<script src="/gestion_evenements/public/js/script.js"></script>
</body>
</html>
