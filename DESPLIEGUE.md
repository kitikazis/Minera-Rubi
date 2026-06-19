# Despliegue — Minera MH S.A.C. (Planta El Rubí)

> ⚠️ Los datos sensibles (usuario, IP, puerto, contraseña) están en
> `DESPLIEGUE.local.md`, que **NO** se sube a git.

## Repositorio

- **GitHub:** https://github.com/kitikazis/Minera-Rubi.git
- **Rama principal:** `main`

## Hosting (cPanel)

| Dato            | Valor                                              |
| --------------- | -------------------------------------------------- |
| Dominio         | `elrubi.enlix.pe`                                  |
| Directorio raíz | `/elrubi.enlix.pe`                                 |
| Force HTTPS     | Disponible (activar "Enable Force HTTPS Redirect") |

### Notas

- Apuntar el dominio a la carpeta `public/` del proyecto cuando sea posible.
- Si se sube todo el proyecto al directorio raíz, el `.htaccess` de la raíz
  redirige automáticamente las peticiones hacia `public/`.
- Recomendado activar **Force HTTPS Redirect** desde cPanel para forzar
  conexiones seguras.

## Despliegue inicial (Terminal cPanel o SSH)

```bash
cd ~/<directorio-raiz-del-dominio>
ls -la                      # revisar contenido por defecto
rm -f index.html            # borrar el index por defecto si existe
git clone https://github.com/kitikazis/Minera-Rubi.git .
```

## Actualizaciones

```bash
cd ~/<directorio-raiz-del-dominio>
git pull origin main
```
