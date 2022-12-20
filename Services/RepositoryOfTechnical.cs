using P1_ASP.Models;

namespace P1_ASP.Services
{
    public class RepositoryOfTechnical
    {

        public List<ClassTechnical> GetTechnical()
        {
            return new List<ClassTechnical>() {
                new ClassTechnical {
                Foto = "/images/html.png",
                Title = "HTML",
                },
                new ClassTechnical {
                Foto = "/images/css.png",
                Title = "CSS",

                },
                new ClassTechnical {
                Foto = "/images/php.png",
                Title = "PHP",
                },
                new ClassTechnical {
                Foto = "/images/pl.jpg",
                Title = "PL/SQL",
                },
                new ClassTechnical {
                Foto = "/images/java.png",
                Title = "JAVA",
                },
                new ClassTechnical {
                Foto = "/images/js.png",
                Title = "JavaScript",
                },
                new ClassTechnical {
                Foto = "/images/asp.net.png",
                Title = "ASP .net",
                }
            };
        }
    }
}
