using P1_ASP.Models;

namespace P1_ASP.Services
{
    public class RepositoryOfProjects
    {

        public List<ClassProjects> GetProjects()
        {
            return new List<ClassProjects>() {
                new ClassProjects {
                Title = "ASP.net",
                Description = "Realizado con PHP,HTML,CSS,MYSQL,JS",
                Link = "/proyectos/M12Proyecto/PaginaPrincipal.php",
                ImageURL = "/images/M12.jpg"
                },
                new ClassProjects {
                Title = "Java Script",
                Description = "Realizado con HTML,CSS,JS",
                Link = "/proyectos/Practica4/index.html",
                ImageURL = "/images/M6.jpg"
                },
                new ClassProjects {
                Title = "ASP.net",
                Description = "Realizado con PHP,HTML,CSS",
                Link = "/proyectos/M12Proyecto/PaginaPrincipal.php",
                ImageURL = "/images/m7.jpg"
                },
                new ClassProjects {
                Title = "Java Script",
                Description = "Realizado con HTML,CSS",
                Link = "/proyectos/Practica5/Principal.html",
                ImageURL = "/images/M9.jpg"
                },
                new ClassProjects {
                Title = "ASP.net",
                Description = "Realizado con BOOSTRAP 5",
                Link = "/proyectos/Practica3/index.html",
                ImageURL = "/images/M9_1.jpg"
                },
                new ClassProjects {
                Title = "Java Script",
                Description = "Realizado con HTML,CSS,BOOSTRAP 5",
                Link = "/proyectos/practica9/index.html",
                ImageURL = "/images/M9_2.jpg"
                }
            };
        }
    }
}
