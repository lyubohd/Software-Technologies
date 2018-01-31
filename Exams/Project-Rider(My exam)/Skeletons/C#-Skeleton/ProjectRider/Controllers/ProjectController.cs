namespace ProjectRider.Controllers
{
    using System.Collections.Generic;
    using System.Linq;
    using System.Web.Mvc;
    using Models;

    [ValidateInput(false)]
    public class ProjectController : Controller
    {
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            using (var context = new ProjectRiderDbContext())
            {
                var project = context.Projects.ToList();
                return View(project);
            }
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            return View(new Project());
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Project project)
        {
            using (var context = new ProjectRiderDbContext())
            {
                if (this.ModelState.IsValid)
                {
                    context.Projects.Add(project);
                    context.SaveChanges();
                    return Redirect("/");
                }

                return View(project);
            }
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int id)
        {
            using (var context = new ProjectRiderDbContext())
            {
                var project = context.Projects.Find(id);
                if (project == null)
                {
                    return HttpNotFound();
                }

                return View(project);
            }
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int id, Project project)
        {
            using (var context = new ProjectRiderDbContext())
            {
                Project taskFromDb = context.Projects.Find(id);

                taskFromDb.Title = project.Title;
                taskFromDb.Description = project.Description;
                taskFromDb.Budget = project.Budget;

                context.SaveChanges();

                return Redirect("/");
            }
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int id)
        {
            using (var context = new ProjectRiderDbContext())
            {
                var project = context.Projects.Find(id);
                if (project == null)
                {
                    return HttpNotFound();
                }

                return View(project);
            }
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int id, Project reportModel)
        {
            using (var context = new ProjectRiderDbContext())
            {
                var projectFromDb = context.Projects.Find(id);
                if (projectFromDb == null)
                {
                    return HttpNotFound();
                }

                context.Projects.Remove(projectFromDb);
                context.SaveChanges();

                return Redirect("/");
            }
        }
    }
}