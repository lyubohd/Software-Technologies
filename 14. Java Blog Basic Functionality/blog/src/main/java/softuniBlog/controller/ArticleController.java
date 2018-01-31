package softuniBlog.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.access.prepost.PreAuthorize;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import softuniBlog.bindingModel.ArticleBindingModel;
import softuniBlog.entity.Article;
import softuniBlog.entity.User;
import softuniBlog.repository.ArticleRepository;
import softuniBlog.repository.UserRepository;

@Controller
public class ArticleController {
    @Autowired
    private ArticleRepository articleRepository;
    @Autowired
    private UserRepository userRepository;

    @GetMapping("/article/create")
    @PreAuthorize("isAuthenticated()")
    public String create(Model model) {
        model.addAttribute("view", "article/create");

        return "base-layout";
    }

    @PostMapping("/article/create")
    @PreAuthorize("isAuthenticated()")
    public String createProcess(ArticleBindingModel articleBindingModel) {
        UserDetails user = (UserDetails) SecurityContextHolder.getContext().getAuthentication().getPrincipal();
        User userEntity = this.userRepository.findByEmail(user.getUsername());

        if (articleBindingModel.getTitle().equals("")
                || articleBindingModel.getContent().equals("")) {
            return "redirect:/article/create";
        }

        Article article = new Article(articleBindingModel.getTitle(), articleBindingModel.getContent(), userEntity);
        this.articleRepository.saveAndFlush(article);

        return "redirect:/";
    }

    @GetMapping("/article/{id}")
    public String details(Model model, @PathVariable Integer id) {
        Article article = articleRepository.findOne(id);

        if (article == null) {
            return "redirect:/";
        }

        model.addAttribute("article", article);
        model.addAttribute("view", "article/details");

        return "base-layout";
    }

    @GetMapping("article/edit/{id}")
    @PreAuthorize("isAuthenticated()")
    public String edit(@PathVariable Integer id, Model model) {
        Article article = articleRepository.findOne(id);

        if (article == null) {
            return "redirect:/";
        }

        model.addAttribute("article", article);
        model.addAttribute("view", "article/edit");

        return "base-layout";
    }

    @PostMapping("article/edit/{id}")
    @PreAuthorize("isAuthenticated()")
    public String editProcess(@PathVariable Integer id, ArticleBindingModel articleBindingModel) {
        Article article = articleRepository.findOne(id);

        if (article == null) {
            return "redirect:/";
        }

        if (articleBindingModel.getTitle().equals("")
                || articleBindingModel.getContent().equals("")) {
            return "redirect:/article/edit/{id}";
        }

        article.setTitle(articleBindingModel.getTitle());
        article.setContent(articleBindingModel.getTitle());

        articleRepository.saveAndFlush(article);

        return "redirect:/";
    }

    @GetMapping("/article/delete/{id}")
    @PreAuthorize("isAuthenticated()")
    public String delete(Model model, @PathVariable Integer id) {
        Article article = articleRepository.findOne(id);

        if (article == null) {
            return "redirect:/";
        }

        model.addAttribute("article", article);
        model.addAttribute("view", "article/delete");

        return "base-layout";
    }

    @PostMapping("/article/delete/{id}")
    @PreAuthorize("isAuthenticated()")
    public String deleteProcess(@PathVariable Integer id) {
        Article article = articleRepository.findOne(id);

        if (article == null) {
            return "redirect:/";
        }

        articleRepository.delete(article);
        articleRepository.flush();

        return "redirect:/";
    }
}
