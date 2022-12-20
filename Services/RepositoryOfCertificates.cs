using P1_ASP.Models;

namespace P1_ASP.Services
{
    public class RepositoryOfCertificates
    {

        public List<ClassFormationCertificates> GetCertificates()
        {
            return new List<ClassFormationCertificates>() {
                new ClassFormationCertificates {
                Foto = "/images/1.png",
                Title = "Administración de Sistemas Operativos Linux",
                Empresa = "Linux Professional Institute",
                Link = "/certificados/LINUX-DAW.pdf"
                },
                new ClassFormationCertificates {
                Foto = "/images/2.png",
                Title = "Java SE Fundamentals",
                Empresa = "Oracle Academy",
                Link = "/certificados/Oracle-DAW.pdf"
                },
                new ClassFormationCertificates {
                Foto = "/images/3.png",
                Title = "Programación PL/SQL Oracle 11g",
                Empresa = "Oracle Academy",
                Link = "/certificados/Oracle-DAW2.pdf"
                },
                new ClassFormationCertificates {
                Foto = "/images/4.png",
                Title = "Administración de Windows 10",
                Empresa = "Microsoft",
                Link = "/certificados/Oracle-DAW3.pdf"
                },
                new ClassFormationCertificates {
                Foto = "/images/5.png",
                Title = "Administración de Infraestructuras de Red con Windows Server",
                Empresa = "Microsoft",
                Link = "/certificados/Windows-2-DAW.pdf"
                },
                new ClassFormationCertificates {
                Foto = "/images/6.png",
                Title = "Programación SQL Oracle 11g",
                Empresa = "Oracle Academy",
                Link = "/certificados/Windows-2-DAW.pdf"
                }
            };
        }
    }
}
