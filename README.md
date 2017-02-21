# yii2-advanced-configured
Plantilla de yii2 advanced con yii2-admin, (yii2-user), htaccess y urlmanager configurados para pretty url en backend/ y frontend/.

- Tenemos que tener configurada una bd básica para que funcione:

1. Configurar correctamente common/config/main-local.php con la conf de tu bd.

2. Ejecutar:

// menu manager (optional),
$(project root)> yii migrate --migrationPath=@mdm/admin/migrations

// class 'yii\rbac\DbManager' para rbac
$(project root)> yii migrate --migrationPath=@yii/rbac/migrations

