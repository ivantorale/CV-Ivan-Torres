using P1_ASP.Models;

namespace P1_ASP.Services
{
    public class RepositoryOfAcademy
    {

        public List<ClassFormationAcademy> GetFormationAcademy()
        {
            return new List<ClassFormationAcademy>() {
                new ClassFormationAcademy {
                Foto = "/images/Monlau.png",
                Ciclo = "GRADO SUPERIOR, DESARROLLO DE APLICACIONES WEB",
                Ubicacion = "Institut Monlau, Barcelona",
                Año = "2021-Actualmente",
                Link = "https://www.monlau.com/"
                },
                new ClassFormationAcademy {
                Foto = "/images/Monlau.png",
                Ciclo = "GRADO MEDIO, SISTEMES MICROINFORMÀTICS I XARXES\r\n",
                Ubicacion = "Institut Poblenou, Barcelona",
                Año = "2018-2021",
                Link = "https://www.monlau.com/"
                },
               new ClassFormationAcademy {
                Foto = "/images/4cantons.png",
                Ciclo = "EDUCACIÓ SECUNDÀRIA OBLIGATÒRIA",
                Ubicacion = "Institut 4 cantons, Barcelona",
                Año = "2014-2018",
                Link = "http://www.4cantons.cat/"
                }
            };
        }
    }
}
